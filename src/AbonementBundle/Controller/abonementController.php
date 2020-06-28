<?php

namespace AbonementBundle\Controller;

use AbonementBundle\Entity\abonnement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class abonementController extends Controller
{


    /**
     * @Route("/ShowAbonnement", methods={"GET","HEAD"})
     */
    public function AbonnementAction()
    {
        $abonnement = new abonnement();
        $abonnement
            ->setDesAbonnement('NAJOUAAAA')
         ;

        $data = $this->get('jms_serializer')->serialize($abonnement, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/ShowAllAbonnement", methods={"GET","HEAD"})
     */
    public function getallAbonnement()
    {
        $abonnement = $this->getDoctrine()
            ->getRepository('AbonementBundle:abonnement')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($abonnement , 'json');
        $response = new Response($data);
        return $response;
    }


    /**
     * @Route("/ShowAbonementByID/{id}", methods={"GET","HEAD"})
     */
    public function getAbonementlicationbyid( abonnement $abonnement)
    {
        $data = $this->get('jms_serializer')->serialize($abonnement,'json');
        $response = new Response($data);
        return $response;
    }

    /**
     * @Route("/DeleteAbonnementByID/{id_abonnement}", methods={"DELETE","HEAD"})
     */
    public function deleteSession(Request $request)
    {
        $idreq = $request->get('id_abonnement');
        $em = $this->getDoctrine()->getManager();

        $abn = $em
            ->getRepository('AbonementBundle:abonnement')
            ->find($idreq);
        $em->remove($abn);
        $em->flush();

        return new JsonResponse(['Abonnement Deteted' => 'Succes'], 200);
    }


    /**
     * @Route("/updateAbonnement/{id_abonnement}", methods={"PUT","HEAD"})
     */
    public function UpdateAbonnementAction(Request $request)
    {

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $updAbonnement = $doctrine
            ->getRepository('AbonementBundle:abonnement')
            ->find($request->get('id_abonnement'));

        $data = $request->getContent();
        $AbonnementDesc = $this->get('jms_serializer')->deserialize($data,abonnement::class,'json');

        $updAbonnement
            ->setDesAbonnement($AbonnementDesc->getDesAbonnement());

        $manager->persist($updAbonnement);
        $manager->flush();

        return new JsonResponse(['Update Abonnement' => 'succes'], 200);
    }

    /**
     * @Route("/AddAbonnement", methods={"POST","HEAD"})
     */
    public function addAbonnement(Request $request){
        //recuperer les donnees a partir de postman
        $data = $request->getContent();
        //deserialisation
        $abonnement = $this->get('jms_serializer')
            ->deserialize($data,abonnement::class,'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($abonnement);
        //enregister Session
        $em->flush();
        return new Response('Abonnement Added Successfully','201');

    }


}
