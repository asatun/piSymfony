<?php

namespace ForumBundle\Controller;

use EntityBundle\Entity\Publication;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class publicationController extends Controller
{
    /**
     * @Route("/show", methods={"GET","HEAD"})
     */
    public function showAction()
    {
        $pub = new Publication();
        $pub
            ->setObjet('Mon premier article')
            ->setSujet('Le contenu de mon article.')
            ->setDatePublication(new \DateTime('2018-05-09'))
        ;
        $data = $this->get('jms_serializer')->serialize($pub, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '^http:\/\/127.0.0.1:8000');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');

        return $response;
    }
    /**
     * @Route("/Addpub", methods={"POST","HEAD"})
     */
    public function addPublication(Request $request){
        //recuperer les donnees a partir de postman
        $data = $request->getContent();
        //deserialisation
        $publication = $this->get('jms_serializer')
            ->deserialize($data,publication::class,'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($publication);
        //enregister publication
        $em->flush();
        return new Response('Enregistrer','201');

    }
    /**
     * @Route("/updatepub/{id}", methods={"PUT","HEAD"})
     */
    public function UpdatePublicationAction(Request $request){

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $updpub = $doctrine
            ->getRepository('EntityBundle:Publication')
            ->find($request->get('id'));

        $data = $request->getContent();
        $publica = $this->get('jms_serializer')->deserialize($data,Publication::class,'json');

        $updpub
            ->setObjet($publica->getObjet())
            ->setSujet($publica->getSujet())
            ->setDatePublication($publica->getDatePublication());
        $manager->persist($updpub);
        $manager->flush();

        return new JsonResponse(['modifier' => 'secces'], 200);
    }
    /**
     * @Route("/showall", methods={"GET","HEAD"})
     */
    public function getallpublication()
    {
        $publication = $this->getDoctrine()
            ->getRepository('EntityBundle:Publication')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($publication , 'json');
        $response = new Response($data);
        return $response;
    }
    /**
     * @Route("/deletepub/{id}", methods={"DELETE","HEAD"})
     */
    public function deletepublication(Request $request)
    {
        $idreq = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $publication = $em
            ->getRepository('EntityBundle:Publication')
            ->find($idreq);
        $em->remove($publication);
        $em->flush();

        return new JsonResponse(['supprimé' => 'secces'], 200);
    }
    /**
     * @Route("/getpubid/{id}", methods={"GET","HEAD"})
     */
    public function getpublicationbyid( Publication $publication)
    {
        $data = $this->get('jms_serializer')->serialize($publication , 'json');
        $response = new Response($data);
        return $response;
    }
}
