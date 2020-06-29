<?php

namespace OffreBundle\Controller;

use EntityBundle\Entity\OffreEmploi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/listeOffres")
     * @Method({"GET", "HEAD"})
     */
    public function getAction()
    {
        //$profil = new Profil();
        //$profil->setId(2);
        // $profil->setDesProfil("dfsdfsdfsd");
        // $data = $this->get('jms_serializer')->serialize($profil,'json');

        // $response = new Response($profil);
        $rep = $this->getDoctrine()->getRepository(OffreEmploi::class);
        $offre = $rep->findAll();
        $data = $this->get('jms_serializer')->serialize($offre, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     *@Route("/getOffreById/{id}", methods={"GET"})
     */
    public function getByIdAction(Request $request,$id)
    {

        $rep = $this->getDoctrine()->getRepository(OffreEmploi::class);
        $offre = $rep->find($id);
        $data = $this->get('jms_serializer')->serialize($offre, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("/newOffre")
     * @Method({"POST"})
     */
    public function addOffreAction(Request $request)
    {
        $data = $request->getContent();
        $offre = $this->get('jms_serializer')->deserialize($data, OffreEmploi::class, 'json');

        $em = $this->getDoctrine()->getManager();
        $em->persist($offre);
        $em->flush();

        return new Response('ajout effectué avec succès', Response::HTTP_CREATED);
    }

    /**
     * @Route("/updateOffre/{id}", methods={"PUT"})
     */
    public function updateOffreAction(Request $request,$id)
    {
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $offre = new OffreEmploi();
        $offre = $doctrine->getRepository(OffreEmploi::class)->find($id);
        $data = $request->getContent();
        $OffrefromPost = $this->get('jms_serializer')->deserialize($data, OffreEmploi::class, 'json');

        $offre=$OffrefromPost;
        $offre->setId($id);
        $manager->merge($offre);
        $manager->flush();

        return new Response('mise a jour effectué avec succès', Response::HTTP_CREATED);
    }


    /**
     * @Route("/deleteOffre/{id}", methods={"GET"})
     */
    public function deleteOffreAction(Request $request,$id)
    {
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $offre = new OffreEmploi();
        $offre = $doctrine->getRepository(OffreEmploi::class)->find($id);
        $manager->remove($offre);
        $manager->flush();

        return new Response('suppression effectué avec succès', Response::HTTP_CREATED);
    }



}
