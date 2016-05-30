<?php

namespace DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Application\Sonata\MediaBundle\Entity\Media;
use DefaultBundle\Entity\Image;
use DefaultBundle\Entity\Folder;
use DefaultBundle\Form\FolderType;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function folderDeleteAction(Folder $folder, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $folder->setCover(null);
        $images = $this->getDoctrine()->getRepository('DefaultBundle:Image')->findBy(array("folder" => $folder));
        foreach ($images as $image) {
            $em->remove($image);
        }
        $em->flush();
        $em->remove($folder);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Le dossier a bien été supprimé');

        return $this->redirect($this->generateUrl('default_homepage'));
    }

    public function folderEditAction(Folder $folder, Request $request)
    {
        $form_folder = $this->createForm(new FolderType(), $folder, array(
            'validation_groups' => array('edit')
        ));

        $form_folder->handleRequest($request);

        $form = $this->createFormBuilder()->getForm();
        $form->handleRequest($request);


        if ($form_folder->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($folder);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Dossier mis à jour');
        } elseif ($form_folder->isSubmitted()) {
            $this->get('session')->getFlashBag()->add('alert', 'Il y a des erreurs dans le formulaire');
        } else if ($form->isValid()) {
            // Getting sonata media manager service
            $mediaManager = $this->container->get('sonata.media.manager.media');

            // Getting sonata media object and saving media
            $media = new Media;
            $media->setBinaryContent($request->files->get('file'));
            $media->setContext('default');
            $media->setProviderName('sonata.media.provider.image');
            $mediaManager->save($media);

            $image = new Image;
            $image->setFolder($folder);
            $image->setMedia($media);

            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Images bien uploadées');
        }

        $images = $this->getDoctrine()->getRepository('DefaultBundle:Image')->findBy(array("folder" => $folder));

        return $this->render('DefaultBundle:Default:folder.html.twig', array("folder" => $folder, "images" => $images, 'form' => $form->createView(), "form_folder" => $form_folder->createView()));
    }

    public function indexAction(Request $request)
    {
        $folder = new Folder();
        $form = $this->createForm(new FolderType(), $folder);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($folder);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Dossier créée');
        } elseif ($form->isSubmitted()) {
            $this->get('session')->getFlashBag()->add('alert', 'Erreur lors de la création du dossier');
        }

        $folders = $this->getDoctrine()->getRepository('DefaultBundle:Folder')->findAll();
        return $this->render('DefaultBundle:Default:dashboard.html.twig', array("form" => $form->createView(), "folders" => $folders));
    }

    public function deleteImageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $images = $request->request->get('elements');

        $folder = $request->request->get('folder');
        $folderEntity = $em->getRepository('DefaultBundle:Folder')->find($folder);

        $i = 0;
        foreach ($images as $image) {
            $product = $em->getRepository('DefaultBundle:Image')->find($image);
            if ($product) {
                $i++;
                if ($product == $folderEntity->getCover()) {
                    $folderEntity->setCover(null);
                    $em->flush();
                }

                $em->remove($product);
                $em->flush();
            }
        }
        return new JsonResponse(array('status' => "success", "message" => $i . " images supprimées"));
    }

    public function setCoverAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $image = $request->request->get('image');
        $folder = $request->request->get('folder');

        if (!$image || !$folder)
            return new JsonResponse(array('status' => "error", "message" => "Erreur"));

        $folderEntity = $em->getRepository('DefaultBundle:Folder')->find($folder);
        $imageEntity = $em->getRepository('DefaultBundle:Image')->find($image);
        $folderEntity->setCover($imageEntity);
        $em->flush();

        return new JsonResponse(array('status' => "success", "message" => "Photo de couverture enregistrée"));
    }

    public function directShowAction($slug, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $folder = $em->getRepository('DefaultBundle:Folder')->findOneBy(array("show_slug" => $slug));
        $images = $this->getDoctrine()->getRepository('DefaultBundle:Image')->findBy(array("folder" => $folder));

        return $this->render('DefaultBundle:Default:direct_show.html.twig', array("folder" => $folder, "images" => $images));
    }

    public function directEditAction($slug, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $folder = $em->getRepository('DefaultBundle:Folder')->findOneBy(array("edit_slug" => $slug));

        $form = $this->createFormBuilder()->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            // Getting sonata media manager service
            $mediaManager = $this->container->get('sonata.media.manager.media');

            // Getting sonata media object and saving media
            $media = new Media;
            $media->setBinaryContent($request->files->get('file'));
            $media->setContext('default');
            $media->setProviderName('sonata.media.provider.image');
            $mediaManager->save($media);

            $image = new Image;
            $image->setFolder($folder);
            $image->setMedia($media);

            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Images bien uploadées');
        }
        $images = $this->getDoctrine()->getRepository('DefaultBundle:Image')->findBy(array("folder" => $folder));

        return $this->render('DefaultBundle:Default:direct_edit.html.twig', array("form" => $form->createView(), "folder" => $folder, "images" => $images));
    }
}