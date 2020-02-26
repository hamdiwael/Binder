<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // exams_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ExamsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'exams_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_exams_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'exams_homepage'));
            }

            return $ret;
        }
        not_exams_homepage:

        // afficheexams
        if ('/listeexams' === $pathinfo) {
            return array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::readAction',  '_route' => 'afficheexams',);
        }

        // affichegrades
        if ('/listegrades' === $pathinfo) {
            return array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::readAction',  '_route' => 'affichegrades',);
        }

        // createexams
        if ('/createexams' === $pathinfo) {
            return array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::createAction',  '_route' => 'createexams',);
        }

        // creategrades
        if ('/creategrades' === $pathinfo) {
            return array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::createAction',  '_route' => 'creategrades',);
        }

        // updateexams
        if (0 === strpos($pathinfo, '/updatee') && preg_match('#^/updatee/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateexams']), array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::updateAction',));
        }

        // updategrades
        if (0 === strpos($pathinfo, '/updateg') && preg_match('#^/updateg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'updategrades']), array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::updateAction',));
        }

        // deleteexams
        if (0 === strpos($pathinfo, '/deletee') && preg_match('#^/deletee/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteexams']), array (  '_controller' => 'ExamsBundle\\Controller\\ExamController::deleteAction',));
        }

        // deletegrades
        if (0 === strpos($pathinfo, '/deleteg') && preg_match('#^/deleteg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletegrades']), array (  '_controller' => 'ExamsBundle\\Controller\\GradeController::deleteAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
