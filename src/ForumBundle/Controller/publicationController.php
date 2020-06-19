<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\publication;
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
        $pub = new publication();
        $pub
            ->setObjet('Mon premier article')
            ->setSujet('Le contenu de mon article.')
            ->setDatePublication(new \DateTime('2018-05-09'))
        ;
        $data = $this->get('jms_serializer')->serialize($pub, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

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
     * @Route("/updatepub/{idpublication}", methods={"PUT","HEAD"})
     */
    public function UpdatePublicationAction(Request $request){

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $updpub = $doctrine
            ->getRepository('ForumBundle:publication')
            ->find($request->get('idpublication'));

        $data = $request->getContent();
        $publica = $this->get('jms_serializer')->deserialize($data,publication::class,'json');

        $updpub
            ->setObjet($publica->getObjet())
            ->setSujet($publica->getSujet());
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
            ->getRepository('ForumBundle:publication')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($publication , 'json');
        $response = new Response($data);
        return $response;
    }
    /**
     * @Route("/deletepub/{idpublication}", methods={"DELETE","HEAD"})
     */
    public function deletepublication(Request $request)
    {
        $idreq = $request->get('idpublication');
        $em = $this->getDoctrine()->getManager();

        $publication = $em
            ->getRepository('ForumBundle:publication')
            ->find($idreq);
        $em->remove($publication);
        $em->flush();

        return new JsonResponse(['supprimé' => 'secces'], 200);
    }
    /**
     * @Route("/getpubid/{idpublication}", methods={"GET","HEAD"})
     */
    public function getpublicationbyid( publication $publication)
    {
        $data = $this->get('jms_serializer')->serialize($publication , 'json');
        $response = new Response($data);
        return $response;
    }
}
