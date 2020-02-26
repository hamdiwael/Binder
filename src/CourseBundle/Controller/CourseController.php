<?php

namespace CourseBundle\Controller;

use CourseBundle\Entity\Course;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class CourseController extends Controller
{

    /**
     * @Route("/create-course")
     */
    public function createAction(Request $request) {

        $course = new Course();
        $form = $this->createFormBuilder($course)

            ->add('subject', EntityType::class, [
                // looks for choices from this entity
                'class' => 'CourseBundle:Subject',

                // uses the User.username property as the visible option string
                'choice_label' => 'name',
            ])

            ->add('content', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('teacher', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('save', SubmitType::class, array('label' => 'New Course'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {


            $em = $this->getDoctrine()->getManager();

            $em->persist($course);

            $em->flush();

            return $this->redirect('/view-course/' . $course->getId());

        }

        return $this->render(
            '@Course/course/edit.html.twig',
            array('form' => $form->createView())
        );

    }












    /**
     * @Route("/view-course/{id}")
     */
    public function viewAction($id) {

        $course = $this->getDoctrine()
            ->getRepository('CourseBundle:Course')
            ->find($id);

        if (!$course) {
            throw $this->createNotFoundException(
                'There are no course with the following id: ' . $id
            );
        }

        return $this->render(
            '@Course/course/view.html.twig',
            array('course' => $course)
        );

    }






    /**
     * @Route("/show-courses")
     */
    public function showAction(Request $request) {

        $courses = $this->getDoctrine()
            ->getRepository('CourseBundle:Course')
            ->findAll();
        /**
         * @ar $paginator  \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $courses,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render(
            '@Course/course/show.html.twig',
            array('courses' => $result)
        );

    }





    /**
     * @Route("/delete-course/{id}")
     */
    public function deleteAction($id) {

        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('CourseBundle:Course')->find($id);

        if (!$course) {
            throw $this->createNotFoundException(
                'There are no courses with the following id: ' . $id
            );
        }

        $em->remove($course);
        $em->flush();

        return $this->redirect('/show-courses');

    }




    /**
     * @Route("/update-course/{id}")
     */
    public function updateAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository(Course::class)->find($id);



        $form = $this->createFormBuilder($course)
            ->add('subject', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('content', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('teacher', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Update'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $course = $form->getData();
            $em->flush();

            return $this->redirectToRoute('show-courses');

        }

        return $this->render(
            '@Course/course/edit.html.twig',
            array('form' => $form->createView())
        );

    }



}



