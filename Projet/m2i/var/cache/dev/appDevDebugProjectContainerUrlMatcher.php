<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // m2iprojet_home_route
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'm2iprojet_home_route');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WebServiceController::',  '_route' => 'm2iprojet_home_route',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/presentation')) {
                // m2iprojet_presentationDefault_route
                if ($pathinfo === '/presentation') {
                    return array (  '_controller' => 'AppBundle\\Controller\\WebServiceController::displayArticleDefault',  '_route' => 'm2iprojet_presentationDefault_route',);
                }

                // m2iprojet_presentationArticle_route
                if (0 === strpos($pathinfo, '/presentation/article') && preg_match('#^/presentation/article(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_presentationArticle_route')), array (  '_controller' => 'AppBundle\\Controller\\WebServiceController::displayArticle',  'category' => 'unknown',));
                }

                // m2iprojet_presentationListe_route
                if (rtrim($pathinfo, '/') === '/presentation/liste') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'm2iprojet_presentationListe_route');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\WebServiceController::liste',  '_route' => 'm2iprojet_presentationListe_route',);
                }

            }

            // m2iprojet_parcoursJourneeType_route
            if (0 === strpos($pathinfo, '/parcours') && preg_match('#^/parcours(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_parcoursJourneeType_route')), array (  '_controller' => 'AppBundle\\Controller\\WebServiceController::displayArticle',  'category' => 'unknown',));
            }

        }

        // m2iprojet_livreorTemoignage_route
        if ($pathinfo === '/livreor') {
            return array (  '_controller' => 'AppBundle\\Controller\\WebServiceController::livreor',  '_route' => 'm2iprojet_livreorTemoignage_route',);
        }

        // m2iprojet_evenement_route
        if (0 === strpos($pathinfo, '/evenement') && preg_match('#^/evenement(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_evenement_route')), array (  '_controller' => 'AppBundle\\Controller\\WebServiceController::displayArticle',  'category' => 'unknown',));
        }

        if (0 === strpos($pathinfo, '/conne')) {
            // m2iprojet_connexion_route
            if ($pathinfo === '/connexion') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConnexionController::connexion',  '_route' => 'm2iprojet_connexion_route',);
            }

            // m2iprojet_connect_route
            if ($pathinfo === '/connect') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConnexionController::connect',  '_route' => 'm2iprojet_connect_route',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // m2iprojet_admin_forum_route
            if ($pathinfo === '/admin/forum') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::forums',  '_route' => 'm2iprojet_admin_forum_route',);
            }

            // m2iprojet_admin_route
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::admin',  '_route' => 'm2iprojet_admin_route',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // m2iprojet_admin_user_route
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::users',  '_route' => 'm2iprojet_admin_user_route',);
                }

                // m2iprojet_admin_user_modif_route
                if (0 === strpos($pathinfo, '/admin/user/modif') && preg_match('#^/admin/user/modif/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_admin_user_modif_route')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::modif_users',  'selected_user' => 0,));
                }

                // m2iprojet_admin_user_suppr_route
                if (0 === strpos($pathinfo, '/admin/user/suppr') && preg_match('#^/admin/user/suppr/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_admin_user_suppr_route')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::suppr_users',  'selected_user' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // m2iprojet_admin_article_route
                if ($pathinfo === '/admin/article') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::articles',  '_route' => 'm2iprojet_admin_article_route',);
                }

                // m2iprojet_admin_article_modif_route
                if (0 === strpos($pathinfo, '/admin/article/modif') && preg_match('#^/admin/article/modif/(?P<article_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_admin_article_modif_route')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::modif_articles',  'selected_article' => 0,));
                }

                // m2iprojet_admin_article_suppr_route
                if (0 === strpos($pathinfo, '/admin/article/suppr') && preg_match('#^/admin/article/suppr/(?P<article_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_admin_article_suppr_route')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::suppr_articles',  'selected_article' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/testimony')) {
                // m2iprojet_admin_testimony_route
                if ($pathinfo === '/admin/testimony') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::testimonys',  '_route' => 'm2iprojet_admin_testimony_route',);
                }

                // m2iprojet_admin_testimony_modif_route
                if (0 === strpos($pathinfo, '/admin/testimony/modif') && preg_match('#^/admin/testimony/modif/(?P<testimony_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_admin_testimony_modif_route')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::modif_testimonys',  'selected_testimony' => 0,));
                }

                // m2iprojet_admin_testimony_suppr_route
                if (0 === strpos($pathinfo, '/admin/testimony/suppr') && preg_match('#^/admin/testimony/suppr/(?P<testimony_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'm2iprojet_admin_testimony_suppr_route')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::suppr_testimonys',  'selected_testimony' => 0,));
                }

            }

            // m2iprojet_admin_picture_route
            if ($pathinfo === '/admin/picture') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::admin',  '_route' => 'm2iprojet_admin_picture_route',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
