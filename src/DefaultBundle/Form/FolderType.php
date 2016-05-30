<?php

namespace DefaultBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FolderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('size', 'choice', array(
                'choices' => array(
                    'tile-small' => 'Petit',
                    'tile-square' => 'Moyen',
                    'tile-large' => 'Grand',
                )));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DefaultBundle\Entity\Folder'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'defaultbundle_folder';
    }
}
