<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/css/95b7c7a')) {
            // _assetic_95b7c7a
            if ($pathinfo === '/css/95b7c7a.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '95b7c7a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_95b7c7a',);
            }

            if (0 === strpos($pathinfo, '/css/95b7c7a_')) {
                if (0 === strpos($pathinfo, '/css/95b7c7a_d')) {
                    // _assetic_95b7c7a_0
                    if ($pathinfo === '/css/95b7c7a_dropzone_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '95b7c7a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_95b7c7a_0',);
                    }

                    // _assetic_95b7c7a_1
                    if ($pathinfo === '/css/95b7c7a_demo_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '95b7c7a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_95b7c7a_1',);
                    }

                }

                // _assetic_95b7c7a_2
                if ($pathinfo === '/css/95b7c7a_style_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '95b7c7a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_95b7c7a_2',);
                }

                // _assetic_95b7c7a_3
                if ($pathinfo === '/css/95b7c7a_noJS_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '95b7c7a',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_95b7c7a_3',);
                }

                // _assetic_95b7c7a_4
                if ($pathinfo === '/css/95b7c7a_gamma_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '95b7c7a',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_95b7c7a_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ae18e9a')) {
            // _assetic_ae18e9a
            if ($pathinfo === '/js/ae18e9a.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ae18e9a',);
            }

            if (0 === strpos($pathinfo, '/js/ae18e9a_')) {
                // _assetic_ae18e9a_0
                if ($pathinfo === '/js/ae18e9a_modernizr.custom.70736_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ae18e9a_0',);
                }

                if (0 === strpos($pathinfo, '/js/ae18e9a_j')) {
                    if (0 === strpos($pathinfo, '/js/ae18e9a_jquery.')) {
                        // _assetic_ae18e9a_1
                        if ($pathinfo === '/js/ae18e9a_jquery.masonry.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ae18e9a_1',);
                        }

                        // _assetic_ae18e9a_2
                        if ($pathinfo === '/js/ae18e9a_jquery.history_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ae18e9a_2',);
                        }

                    }

                    // _assetic_ae18e9a_3
                    if ($pathinfo === '/js/ae18e9a_js-url.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ae18e9a_3',);
                    }

                    // _assetic_ae18e9a_4
                    if ($pathinfo === '/js/ae18e9a_jquerypp.custom_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ae18e9a_4',);
                    }

                }

                // _assetic_ae18e9a_5
                if ($pathinfo === '/js/ae18e9a_gamma_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ae18e9a_5',);
                }

                // _assetic_ae18e9a_6
                if ($pathinfo === '/js/ae18e9a_dropzone_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae18e9a',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_ae18e9a_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/4eb1342')) {
            // _assetic_4eb1342
            if ($pathinfo === '/css/4eb1342.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4eb1342',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4eb1342',);
            }

            // _assetic_4eb1342_0
            if ($pathinfo === '/css/4eb1342_dropzone_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4eb1342',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4eb1342_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/39ef954')) {
            // _assetic_39ef954
            if ($pathinfo === '/js/39ef954.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '39ef954',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_39ef954',);
            }

            // _assetic_39ef954_0
            if ($pathinfo === '/js/39ef954_dropzone_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '39ef954',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_39ef954_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/c150338')) {
            // _assetic_c150338
            if ($pathinfo === '/css/c150338.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c150338',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c150338',);
            }

            if (0 === strpos($pathinfo, '/css/c150338_')) {
                if (0 === strpos($pathinfo, '/css/c150338_metro')) {
                    // _assetic_c150338_0
                    if ($pathinfo === '/css/c150338_metro_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c150338',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c150338_0',);
                    }

                    // _assetic_c150338_1
                    if ($pathinfo === '/css/c150338_metro-icons_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c150338',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c150338_1',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/c150338_s')) {
                    // _assetic_c150338_2
                    if ($pathinfo === '/css/c150338_select2_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c150338',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c150338_2',);
                    }

                    // _assetic_c150338_3
                    if ($pathinfo === '/css/c150338_style_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c150338',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c150338_3',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/997b15c')) {
            // _assetic_997b15c
            if ($pathinfo === '/js/997b15c.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '997b15c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_997b15c',);
            }

            if (0 === strpos($pathinfo, '/js/997b15c_')) {
                // _assetic_997b15c_0
                if ($pathinfo === '/js/997b15c_jquery-2.2.3.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '997b15c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_997b15c_0',);
                }

                // _assetic_997b15c_1
                if ($pathinfo === '/js/997b15c_metro_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '997b15c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_997b15c_1',);
                }

                // _assetic_997b15c_2
                if ($pathinfo === '/js/997b15c_select2_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '997b15c',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_997b15c_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // default_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default_homepage');
            }

            return array (  '_controller' => 'DefaultBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default_homepage',);
        }

        if (0 === strpos($pathinfo, '/folder')) {
            // folder_page
            if (0 === strpos($pathinfo, '/folder/edit') && preg_match('#^/folder/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'folder_page')), array (  '_controller' => 'DefaultBundle\\Controller\\DefaultController::folderEditAction',));
            }

            // folder_delete
            if (0 === strpos($pathinfo, '/folder/delete') && preg_match('#^/folder/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'folder_delete')), array (  '_controller' => 'DefaultBundle\\Controller\\DefaultController::folderDeleteAction',));
            }

        }

        // folder_delete_image
        if ($pathinfo === '/deleteImage') {
            return array (  '_controller' => 'DefaultBundle\\Controller\\DefaultController::deleteImageAction',  '_route' => 'folder_delete_image',);
        }

        // folder_set_cover
        if ($pathinfo === '/setCover') {
            return array (  '_controller' => 'DefaultBundle\\Controller\\DefaultController::setCoverAction',  '_route' => 'folder_set_cover',);
        }

        if (0 === strpos($pathinfo, '/folder/direct')) {
            // folder_direct_show
            if (0 === strpos($pathinfo, '/folder/direct/show') && preg_match('#^/folder/direct/show/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'folder_direct_show')), array (  '_controller' => 'DefaultBundle\\Controller\\DefaultController::directShowAction',));
            }

            // folder_direct_edit
            if (0 === strpos($pathinfo, '/folder/direct/edit') && preg_match('#^/folder/direct/edit/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'folder_direct_edit')), array (  '_controller' => 'DefaultBundle\\Controller\\DefaultController::directEditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
