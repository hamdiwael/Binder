<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'binaddabs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\abscenseController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addabscense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listabsences' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\abscenseController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listabscense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteabs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\abscenseController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteabscense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updateabs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\abscenseController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updateabscense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'binaddot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\notificationController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addnotification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listnot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\notificationController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listnotification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletenot' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\notificationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deletenotification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updatenot' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BinBundle\\Controller\\notificationController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/updatenotification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
