<?php

namespace CourseBundle\Controller;

use CourseBundle\Entity\Subject;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class SubjectController extends Controller
{
    /**
     * @Route("/create-subject")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request) {

        $subject = new Subject();
        $form = $this->createFormBuilder($subject)
            ->add('id', \Symfony\Component\Form\Extension\Core\Type\IntegerType::class)
            ->add('name', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('teachers', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('classes', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('save', SubmitType::class, array('label' => 'New Subject'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $subject = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($subject);
            $em->flush();

            return $this->redirect('/view-subject/' . $subject->getId());

        }

        return $this->render('@Course/subject/edit.html.twig',
            array('form' => $form->createView())
        );

    }






    /**
     * @Route("/view-subject/{id}")
     */
    public function viewAction($id) {

        $subject = $this->getDoctrine()
            ->getRepository('CourseBundle:Subject')
            ->find($id);

        if (!$subject) {
            throw $this->createNotFoundException(
                'There are no subject with the following id: ' . $id
            );
        }

        return $this->render(
            '@Course/subject/view.html.twig',
            array('subject' => $subject)
        );

    }





    /**
     * @Route("/show-subjects")
     */
    public function showAction() {

        $subjects = $this->getDoctrine()
            ->getRepository('CourseBundle:Subject')
            ->findAll();

        return $this->render(
            '@Course/subject/show.html.twig',
            array('subjects' => $subjects)
        );

    }


    /**
     * @Route("/delete-subject/{id}")
     */
    public function deleteAction($id) {

        $em = $this->getDoctrine()->getManager();
        $subject = $em->getRepository('CourseBundle:Subject')->find($id);

        if (!$subject) {
            throw $this->createNotFoundException(
                'There are no subjects with the following id: ' . $id
            );
        }

        $em->remove($subject);
        $em->flush();

        return $this->redirect('/show-subjects');

    }




    /**
     * @Route("/admin/update-subject/{id}")
     */
    public function updateAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $subject = $em->getRepository('CourseBundle:Subject')->find($id);

        if (!$subject) {
            throw $this->createNotFoundException(
                'There are no subjects with the following id: ' . $id
            );
        }

        $form = $this->createFormBuilder($subject)
            ->add('name', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('teachers', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('classes', \Symfony\Component\Form\Extension\Core\Type\TextType::class)

            ->add('save', SubmitType::class, array('label' => 'Update'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $subject = $form->getData();
            $em->flush();

            return $this->redirect('/view-subject/' . $id);

        }

        return $this->render(
            '@Course/subject/edit.html.twig',
            array('form' => $form->createView())
        );

    }


}
