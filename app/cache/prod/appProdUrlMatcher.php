<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/blog')) {
            // blog
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'AppBundle\\Controller\\BlogController::viewAction',  '_route' => 'blog',);
            }

            // blog/remove
            if ($pathinfo === '/blog/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\BlogController::removeLastAction',  '_route' => 'blog/remove',);
            }

            // blog/addrandom
            if ($pathinfo === '/blog/addrandom') {
                return array (  '_controller' => 'AppBundle\\Controller\\BlogController::addRandomAction',  '_route' => 'blog/addrandom',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/products')) {
            // products
            if ($pathinfo === '/products') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::overviewAction',  '_route' => 'products',);
            }

            // products/add
            if ($pathinfo === '/products/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::addAction',  '_route' => 'products/add',);
            }

            // products/remove
            if ($pathinfo === '/products/remove') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::removeAction',  '_route' => 'products/remove',);
            }

            // products/update
            if ($pathinfo === '/products/update') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::updateAction',  '_route' => 'products/update',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
