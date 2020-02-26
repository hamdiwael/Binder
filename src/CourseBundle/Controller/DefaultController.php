<?php

namespace CourseBundle\Controller;

use CourseBundle\Entity\Course;
use CourseBundle\Entity\Subject;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('@Course/Default/index.html.twig');
    }




}



