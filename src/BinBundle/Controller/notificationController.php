<?php

namespace BinBundle\Controller;

use BinBundle\Entity\abscense;
use BinBundle\Entity\notification;
use BinBundle\Form\abscenseType;
use BinBundle\Form\notificationType;
use BinBundle\Form\replyType;
use BinBundle\Form\searchType;
use BinBundle\Form\search2Type;
use BinBundle\Form\updateNotificationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class notificationController extends Controller
{
    public function addAction(Request $request)
    {
        $notification = new notification();
        $form = $this->createForm(replyType::class, $notification);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notification);
            $em->flush();


            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
                ->setUsername('rahma.belhadj1@esprit.tn')
                ->setPassword('193JFT1423');
            $mailer = new \Swift_Mailer($transport);

            $em = (new \Swift_Message('Votre Message a eté envoyée avec success '))
                ->setFrom('rahma.belhadj1@esprit.tn')
                ->setTo("r.line1997@gmail.com")

                //  ->setBody('<h3> Bonjour  </h3>' . $contact->getNom()."Votre Message a eté envoyée avec success",'text/html');

                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        '@Bin/notification/mail.html.twig',
                        ['nom' => $notification->getSender()
                            , "mess" => $notification->getContent()]

                    ),
                    'text/html'
                );
            $mailer->send($em);

            return $this->redirectToRoute('listnot');
        }
        return $this->render('@Bin\notification\add.html.twig', array('form' => $form->createView()));
    }

    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $notification = $em->getRepository("BinBundle:notification")
            ->findAll();
        if (!$request->query->has('filter')) {
            return $this->render('@Bin/notification/list.html.twig', array(
                'notification' => $notification
            ));
        } else {
            $notificationFilter = $em->getRepository("BinBundle:notification")
                ->findOneBy([
                    'parentt' => $request->query->getAlnum('filter')
                ]);
            return $this->render('@Bin/notification/list.html.twig', array(
                'notification' => $notificationFilter
            ));
        }
    }
    public function listFrontAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notification = $em->getRepository("BinBundle:notification")
            ->findAll();
        return $this->render('@Bin/notification/listFront.html.twig', array(
            'notification' => $notification
        ));
    }

    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository('BinBundle:notification')->find($id);
        $em->remove($rec);
        $em->flush();


        return $this->redirectToRoute('listnot');

    }


    public function showAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $notification = $em->getRepository('BinBundle:notification')->find($id);
        return $this->render('@Bin/notification/show.html.twig', array(
            'notification' => $notification
        ));
    }

    public function updateAction(Request $request, $id)
    {
        $notification = $this->getDoctrine()->getmanager()->getRepository(notification::class)->find($id);
        $form = $this->createForm(updateNotificationType::class, $notification);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notification);
            $em->flush();
            return $this->redirectToRoute("listnot");
        }
        return $this->render("@Bin/notification/update.html.twig", array("form" => $form->createView()));


    }

    public function treatAction($id)
    {

        $notification = $this->getDoctrine()->getManager();
        $em = $notification->getRepository('BinBundle:notification')->find($id);


        if (!$em) {
            throw $this->createNotFoundException(
                'No notification found for id ' . $id
            );
        }
        $em->setState(true);
        $notification->flush();
        return $this->redirectToRoute('listnotFront');

    }

    public function replyAction(Request $request)
    {
        $notification = new notification();
        $form = $this->createForm(replyType::class, $notification);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notification);
            $em->flush();
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
                ->setUsername('rahma.belhadj1@esprit.tn')
                ->setPassword('193JFT1423');
            $mailer = new \Swift_Mailer($transport);

            $em = (new \Swift_Message('Votre Message a eté envoyée avec success '))
                ->setFrom('salh.12@gmail.com')
                ->setTo("r.line1997@gmail.com")

                //  ->setBody('<h3> Bonjour  </h3>' . $contact->getNom()."Votre Message a eté envoyée avec success",'text/html');

                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        '@Bin/notification/mail2.html.twig',
                        ['nom' => $notification->getSender()
                            , "mess" => $notification->getContent()]

                    ),
                    'text/html'
                );
            $mailer->send($em);

            return $this->redirectToRoute('listnotFront');
        }
        return $this->render('@Bin\notification\reply.html.twig', array('form' => $form->createView()));
    }

    public function searchAction(Request $request){

        $notification = new notification();//instance d'entity
        $form= $this->createForm(search2Type::class,$notification);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $notification = $this->getDoctrine()->getManager()->getRepository(notification::class)
                ->findBy(array('receiver'=>$notification->getReceiver()));
        }
        else{
            $notification = $this->getDoctrine()->getManager()->getRepository(notification::class)->findAll();
        }

        return $this->render("@Bin/notification/search.html.twig",array("form"=>$form->createView(),'notification'=>$notification));


    }






}