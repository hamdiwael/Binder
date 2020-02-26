<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    public function backAction()
    {
        // replace this example code with whatever you need
        return $this->render('back.html.twig');
    }

    public function tableAction()
    {
        // replace this example code with whatever you need
        return $this->render('table.html.twig');
    }




    /**
     * @Route("/user/test", name="testRoleUser")
     */
    public function testRoleUserAction(Request $request)
    {
        return $this->render('examples_roles/hello-world.html.twig');

    }


    /**
     * @Route("/admin/test", name="testRoleAdmin")
     */
    public function testRoleAdminAction(Request $request)
    {
        return $this->render('examples_roles/hello-world-admin.html.twig');

    }


}



