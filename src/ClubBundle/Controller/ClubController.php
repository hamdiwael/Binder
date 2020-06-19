<?php

namespace ClubBundle\Controller;


use ClubBundle\ClubBundle;
use ClubBundle\Entity\Activity;
use ClubBundle\Entity\Club;
use ClubBundle\Entity\Commentaire;
use ClubBundle\Form\ActivityType;
use ClubBundle\Form\ClubType;
use ClubBundle\Form\CommentaireType;
use ClubBundle\Form\updateActivityType;
use ClubBundle\Form\updateClubType;
use ClubBundle\Form\updateType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClubController extends Controller
{
    public function addClubAction(Request $request){
     $club = new Club();
     $form = $this->createForm(ClubType::class,$club);
     $form->handleRequest($request);
     if($form->isSubmitted()){
         $club->uploadProfilePicture();
         $em = $this->getDoctrine()->getManager();

         $em->persist($club);
         $em->flush();
     }

     return $this->render("@Club/Club/add.html.twig",array('form'=>$form->createView()));

    }

    public function displayClubsAction(){
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository("ClubBundle:Club")->findAll();
        return $this->render("@Club/Club/display.html.twig",array('club'=>$club));

    }
    public function addActivityAction(Request $request)
    {   //create an object to store our data after the form submission
        $activity=new Activity();
        //prepare the form with the function: createForm()
        $form=$this->createForm(ActivityType::class,$activity);
        //extract the form answer from the received request
        $form=$form->handleRequest($request);
        //if this form is valid
        if($form->isValid()){
            //create an entity manager object
            $em=$this->getDoctrine()->getManager();
            //persist the object $club in the ORM
            $em->persist($activity);
            //update the data base with flush
            $em->flush();
            //redirect the route after the add
            return $this->redirectToRoute('club_AddA');
        }
        return $this->render('@Club/Activity/addActivity.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    public function displayActivitiesAction(){
        $em = $this->getDoctrine()->getManager();
        $activity = $em->getRepository("ClubBundle:Activity")->findAll();
        return $this->render("@Club/Activity/displayActivities.html.twig",array('activity'=>$activity));

    }

        public function updateClubAction(Request $request, $id)
        {
            $club= $this->getDoctrine()->getmanager()->getRepository(Club::class)->find($id);
            $form= $this->createForm(updateClubType::class,$club);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $ef= $this->getDoctrine()->getManager();
                $ef->persist($club);
                $ef->flush();
                return $this->redirectToRoute("club_display");
            }
            return $this->render("@Club/Club/updateClub.html.twig",array("form"=>$form->createView()));

        }

    public function updateActivityAction(Request $request, $id)
    {
        $activity= $this->getDoctrine()->getmanager()->getRepository(Activity::class)->find($id);
        $form= $this->createForm(updateActivityType::class,$activity);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $ef= $this->getDoctrine()->getManager();
            $ef->persist($activity);
            $ef->flush();
            return $this->redirectToRoute("club_displayActivity");
        }
        return $this->render("@Club/Activity/updateActivity.html.twig",array("form"=>$form->createView()));

    }


    public function deleteClubAction($id)
    {
        //get the object to be removed given the submitted id
        $em = $this->getDoctrine()->getManager();
        $club= $em->getRepository(Club::class)->find($id);
        //remove from the ORM
        $em->remove($club);
        //update the data base
        $em->flush();
        return $this->redirectToRoute("club_display");
    }

    public function deleteActivityAction($id)
    {
        //get the object to be removed given the submitted id
        $em = $this->getDoctrine()->getManager();
        $activity= $em->getRepository(Activity::class)->find($id);
        //remove from the ORM
        $em->remove($activity);
        //update the data base
        $em->flush();
        return $this->redirectToRoute("club_displayActivity");
    }
 public function welcomeAction(){
     return $this->render("@Club/front/welcome.html.twig");
 }


    public function displayClubsfrontAction(){
        $em=$this->getDoctrine()->getManager();
        $clubs=$em->getRepository("ClubBundle:Club")->findAll();
        return $this->render('@Club/Club/displayClubFront.html.twig', array('club'=>$clubs));
    }



    public function clubDetailsAction(Club $club,Request $request){

        $em=$this->getDoctrine()->getManager();
        $activity=new Activity();
        $con=$request->get('id');
        $club=$em->getRepository(Club::class)->find($con);
        $form =$this->createForm(ActivityType::class,$activity);
        $form->handleRequest($request);
        if($form->isValid()){

            $em=$this->getDoctrine()->getManager();
            //$category->uploadProfilePicture();

            $activity->setClub($club);
           // $activity->uploadProfilePicture();

            $em->persist($activity);
            $em->flush();
            //return $this->redirectToRoute('gf_affiche');
        }

        $activities=$em->getRepository(Activity::class)->findAll();


        return $this->render('@Club/Club/categorydetail.html.twig', [


            'club'=>$club,'form'=>$form->createView(),'activities'=>$activities
        ]);
    }


    public function clubDetailsfrontAction(Club $club,Request $request){

        $em=$this->getDoctrine()->getManager();
       // $activity=new Activity();
        $con=$request->get('id');
        $club=$em->getRepository(Club::class)->find($con);
        //$form =$this->createForm(ActivityType::class,$activity);
       // $form->handleRequest($request);
      /*  if($form->isValid()){

            $em=$this->getDoctrine()->getManager();
            //$category->uploadProfilePicture();

            $activity->setClub($club);
            // $activity->uploadProfilePicture();

            $em->persist($activity);
            $em->flush();
            //return $this->redirectToRoute('gf_affiche');
        }*/

        $activities=$em->getRepository(Activity::class)->findAll();


        return $this->render('@Club/Club/clubdetailfront.html.twig', [


            'club'=>$club,'activities'=>$activities
        ]);
    }


    public function activityDetailsFrontAction(Activity $activity,Request $request){

        $em=$this->getDoctrine()->getManager();
        $commentaire=new Commentaire();
        $commentaire->setDatecreate(new \DateTime('now'));

        $con=$request->get('id');
        $activity=$em->getRepository(Activity::class)->find($con);
        $form =$this->createForm(CommentaireType::class,$commentaire);
        $form->handleRequest($request);
        if($form->isValid()){

            $em=$this->getDoctrine()->getManager();
            //$category->uploadProfilePicture();

            $commentaire->setActivity($activity);

            $em->persist($commentaire);
            $em->flush();
            //return $this->redirectToRoute('gf_affiche');
        }
        $commentaires=$em->getRepository(Commentaire::class)->findAll();



        return $this->render('@Club/Club/activitydetailfront.html.twig', [


            'activity'=>$activity,'form'=>$form->createView(),'commentaires'=>$commentaires//,'nbr'=>$nbr,
        ]);
    }

    public function exportAction(){
        $em = $this->getDoctrine()->getManager();
$activity =$em->getRepository('ClubBundle:Activity')->findAll();

$writer = $this->container->get('egyg33k.csv.writer');
$csv = $writer::createFromFileObject(new \SplTempFileObject());
$csv->insertOne(['about', 'location','duration']);
foreach ($activity as $activity){
    $csv->insertOne([$activity->getAbout(),$activity->getLocation(),$activity->getDuration()]);
}
$csv->output('Activity.csv');
die('export');
}


}
