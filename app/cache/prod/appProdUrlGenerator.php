<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'default_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DefaultBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'folder_page' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DefaultBundle\\Controller\\DefaultController::folderEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/folder',    ),  ),  4 =>   array (  ),),
        'folder_delete_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DefaultBundle\\Controller\\DefaultController::deleteImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteImage',    ),  ),  4 =>   array (  ),),
        'folder_set_cover' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DefaultBundle\\Controller\\DefaultController::setCoverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/setCover',    ),  ),  4 =>   array (  ),),
        'sonata_media_gallery_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/media/gallery/',    ),  ),  4 =>   array (  ),),
        'sonata_media_gallery_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',  ),  2 =>   array (    'id' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/media/gallery/view',    ),  ),  4 =>   array (  ),),
        'sonata_media_view' => array (  0 =>   array (    0 => 'id',    1 => 'format',  ),  1 =>   array (    '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',    'format' => 'reference',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/media/view',    ),  ),  4 =>   array (  ),),
        'sonata_media_download' => array (  0 =>   array (    0 => 'id',    1 => 'format',  ),  1 =>   array (    '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',    'format' => 'reference',  ),  2 =>   array (    'id' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/media/download',    ),  ),  4 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
