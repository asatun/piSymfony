<?php

namespace SesionBundle\Controller;

use SesionBundle\Entity\session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class sessionController extends Controller
{
    /**
     * @Route("/ShowSession", methods={"GET","HEAD"})
     */
    public function SessionAction()
    {
        $session = new session();
        $session
            ->setTitreSession('Ma premiere session')
            ->setDescription('TEST SESSIONXXXX')
        ->setDateDebut(new \DateTime('01-07-2020'))
        ->setDateFin(new \DateTime('01-09-2020'));

        $data = $this->get('jms_serializer')->serialize($session, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/ShowAllSession", methods={"GET","HEAD"})
     */
    public function getallSession()
    {
        $session = $this->getDoctrine()
            ->getRepository('SesionBundle:session')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($session , 'json');
        $response = new Response($data);
        return $response;
    }

    /**
     * @Route("/ShowSessionByID/{id_session}", methods={"GET","HEAD"})
     */
    public function getsessionlicationbyid( session $session)
    {
        $data = $this->get('jms_serializer')->serialize($session , 'json');
        $response = new Response($data);
        return $response;
    }

    /**
     * @Route("/DeleteSessionByID/{id_session}", methods={"DELETE","HEAD"})
     */
    public function deleteSession(Request $request)
    {
        $idreq = $request->get('id_session');
        $em = $this->getDoctrine()->getManager();

        $session = $em
            ->getRepository('SesionBundle:session')
            ->find($idreq);
        $em->remove($session);
        $em->flush();

        return new JsonResponse(['Session Deleted ' => 'Succes'], 200);
    }


    /**
     * @Route("/updatesession/{id_session}", methods={"PUT","HEAD"})
     */
    public function UpdateSessionAction(Request $request)
    {

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $updsession = $doctrine
            ->getRepository('SesionBundle:session')
            ->find($request->get('id_session'));

        $data = $request->getContent();
        $sessionDesc = $this->get('jms_serializer')->deserialize($data,session::class,'json');

        $updsession
            ->setTitreSession($sessionDesc->getTitreSession())
            ->setDescription($sessionDesc->getDescription())
            ->setDateDebut($sessionDesc->getDateDebut())
            ->setDateFin($sessionDesc->getDateFin());
        $manager->persist($updsession);
        $manager->flush();

        return new JsonResponse(['Update Session' => 'succes'], 200);
    }

    /**
     * @Route("/AddSession", methods={"POST","HEAD"})
     */
    public function addSession(Request $request){
        //recuperer les donnees a partir de postman
        $data = $request->getContent();
        //deserialisation
        $session = $this->get('jms_serializer')
            ->deserialize($data,session::class,'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($session);
        //enregister Session
        $em->flush();
        return new Response('Session Added Successfully','201');

    }

    }
