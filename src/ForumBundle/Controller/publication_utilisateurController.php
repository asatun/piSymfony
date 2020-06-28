<?php

namespace ForumBundle\Controller;

use EntityBundle\Entity\Publication;

use EntityBundle\Entity\Publication_utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class publication_utilisateurController extends Controller
{
    /**
     * @Route("/showpubutili", methods={"GET","HEAD"})
     */
    public function showAction()
    {
        $pub = new Publication_utilisateur();
        $pub
            ->setCommentaire('Mon premier article')
            ->setLikeDislike(1)
            ->setIdPublication(6)
            ->setIdUtilisateur(3)
        ;
        $data = $this->get('jms_serializer')->serialize($pub, 'json');

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    /**
     * @Route("/Addpubutil", methods={"POST","HEAD"})
     */
    public function addPublicationutil(Request $request){
        //recuperer les donnees a partir de postman
        $data = $request->getContent();
        //deserialisation
        $publicationutil = $this->get('jms_serializer')
            ->deserialize($data,Publication_utilisateur::class,'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($publicationutil);
        //enregister publication
        $em->flush();

        return new Response('Enregistrer commentaire','201');

    }
    /**
     * @Route("/updatepubutil/{id}", methods={"PUT","HEAD"})
     */
    public function UpdatePublicationAction(Request $request){

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $updpub = $doctrine
            ->getRepository('EntityBundle:Publication_utilisateur')
            ->find($request->get('id'));

        $data = $request->getContent();
        $publica = $this->get('jms_serializer')->deserialize($data,Publication_utilisateur::class,'json');

        $updpub
            ->setLikeDislike($publica->getLikeDislike())
            ->setCommentaire($publica->getCommentaire());
        $manager->persist($updpub);
        $manager->flush();

        return new JsonResponse([' commentaire modifier' => 'success'], 200);
    }
    /**
     * @Route("/api/showallcom", methods={"GET","HEAD"})
     */
    public function getallpublication()
    {
        $publicationcommentaire = $this->getDoctrine()
            ->getRepository('EntityBundle:Publication_utilisateur')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($publicationcommentaire , 'json');
        $response = new Response($data);
        return $response;
    }
    /**
     * @Route("/deletepubcom/{id}", methods={"DELETE","HEAD"})
     */
    public function deletepublication(Request $request)
    {
        $idreq = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $publication = $em
            ->getRepository('EntityBundle:Publication_utilisateur')
            ->find($idreq);
        $em->remove($publication);
        $em->flush();

        return new JsonResponse(['supprimé' => 'seccess'], 200);
    }
    /**
     * @Route("/getpubidcom/{id}", methods={"GET","HEAD"})
     */
    public function getcommentairebyid( Publication_utilisateur $publication_utilisateur)
    {
        $data = $this->get('jms_serializer')->serialize($publication_utilisateur , 'json');
        $response = new Response($data);
        return $response;
    }
}
