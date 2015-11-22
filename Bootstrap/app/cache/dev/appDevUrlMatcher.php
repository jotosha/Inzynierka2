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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/0c961fa')) {
                // _assetic_0c961fa
                if ($pathinfo === '/css/0c961fa.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c961fa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0c961fa',);
                }

                // _assetic_0c961fa_0
                if ($pathinfo === '/css/0c961fa_part_1_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c961fa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0c961fa_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/c263a4c')) {
                // _assetic_c263a4c
                if ($pathinfo === '/css/c263a4c.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c263a4c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c263a4c',);
                }

                if (0 === strpos($pathinfo, '/css/c263a4c_part_1_bootstrap-datepicker')) {
                    // _assetic_c263a4c_0
                    if ($pathinfo === '/css/c263a4c_part_1_bootstrap-datepicker_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c263a4c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c263a4c_0',);
                    }

                    // _assetic_c263a4c_1
                    if ($pathinfo === '/css/c263a4c_part_1_bootstrap-datepicker.css_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c263a4c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c263a4c_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/2858745')) {
            // _assetic_2858745
            if ($pathinfo === '/js/2858745.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 2858745,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2858745',);
            }

            // _assetic_2858745_0
            if ($pathinfo === '/js/2858745_bootstrap-datepicker_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 2858745,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2858745_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/9b0345b')) {
                // _assetic_9b0345b
                if ($pathinfo === '/css/9b0345b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9b0345b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9b0345b',);
                }

                // _assetic_9b0345b_0
                if ($pathinfo === '/css/9b0345b_part_1_glowna_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9b0345b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9b0345b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/6794198')) {
                // _assetic_6794198
                if ($pathinfo === '/css/6794198.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 6794198,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6794198',);
                }

                // _assetic_6794198_0
                if ($pathinfo === '/css/6794198_login_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 6794198,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6794198_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/15e01ef')) {
                // _assetic_15e01ef
                if ($pathinfo === '/css/15e01ef.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '15e01ef',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_15e01ef',);
                }

                // _assetic_15e01ef_0
                if ($pathinfo === '/css/15e01ef_part_1_noweogloszenie_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '15e01ef',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_15e01ef_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/3e238f1')) {
                // _assetic_3e238f1
                if ($pathinfo === '/css/3e238f1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3e238f1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3e238f1',);
                }

                // _assetic_3e238f1_0
                if ($pathinfo === '/css/3e238f1_part_1_register_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3e238f1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3e238f1_0',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // StronaGlowna
        if ($pathinfo === '/StronaGlowna') {
            return array (  '_controller' => 'AppBundle\\Controller\\GlownaController::newAction',  '_route' => 'StronaGlowna',);
        }

        // Login
        if ($pathinfo === '/Login') {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::newAction',  '_route' => 'Login',);
        }

        // NoweOgloszenie
        if ($pathinfo === '/NoweOgloszenie') {
            return array (  '_controller' => 'AppBundle\\Controller\\NoweOgloszenieController::newAction',  '_route' => 'NoweOgloszenie',);
        }

        // Register
        if ($pathinfo === '/Register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::newAction',  '_route' => 'Register',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
