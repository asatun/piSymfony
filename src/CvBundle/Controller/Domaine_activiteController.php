<?php

namespace CvBundle\Controller;


use CvBundle\Entity\Domaine_activite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Domaine_activiteController extends Controller
{
    /**
     * @Route("/ShowD", methods={"GET","HEAD"})
     */
    public function domaineAction()
    {
        $dm = new Domaine_activite();
        $dm
            ->setIdAbonnement('1')
            ->setIdParent('1')
            ->setNomDomaine('info');

        $data = $this->get('jms_serializer')->serialize($dm, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/ShowAllD", methods={"GET","HEAD"})
     */
    public function getallDomaine()
    {
        $dm = $this->getDoctrine()
            ->getRepository('CvBundle:Domaine_activite')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($dm , 'json');
        $response = new Response($data);
        return $response;
    }

    /**
     * @Route("/ShowDByID/{id}", methods={"GET","HEAD"})
     */
    public function getDbyid(Domaine_activite $dm)
    {
        $data = $this->get('jms_serializer')->serialize($dm , 'json');
        $response = new Response($data);
        return $response;
    }

    /**
     * @Route("/DeleteDByID/{id}", methods={"DELETE","HEAD"})
     */
    public function deleteD(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $dm = $em
            ->getRepository('CvBundle:Domaine_activite')
            ->find($id);
        $em->remove($dm);
        $em->flush();

        return new JsonResponse(['supprimé' => 'succes'], 200);
    }


    /**
     * @Route("/updateDA/{id}", methods={"PUT","HEAD"})
     */
    public function UpdateDAction(Request $request)
    {

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $dmnew = $doctrine
            ->getRepository('CvBundle:Domaine_activite')
            ->find($request->get('id'));

        $data = $request->getContent();
        $dm = $this->get('jms_serializer')
            ->deserialize($data,Domaine_activite::class,'json');

        $dmnew
            ->setIdAbonnement($dm.getIdAbonnement())
           ->setIdParent($dm.getIdParent())
            ->setNomDomaine($dm.getNomDomaine());
        $manager->persist($dmnew);
        $manager->flush();

        return new JsonResponse(['modifier' => 'succes'], 200);
    }

    /**
     * @Route("/AddD", methods={"POST","HEAD"})
     */
    public function addD(Request $request){
        //recuperer les donnees a partir de postman
        $data = $request->getContent();
        //deserialisation
        $dm = $this->get('jms_serializer')
            ->deserialize($data,Domaine_activite::class,'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($dm);
        //enregister Session
        $em->flush();
        return new Response('Session Added Successfully','201');

    }
}
