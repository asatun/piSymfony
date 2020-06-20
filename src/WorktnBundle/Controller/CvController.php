<?php

namespace WorktnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WorktnBundle\Entity\Cv;

class CvController extends Controller
{
    /**
     * @Route("/ShowCv", methods={"GET","HEAD"})
     */
    public function CVAction()
    {
        $cv = new Cv();
        $cv
            ->setAnneeObtention('2018')
            ->setCompetences('ffffff')
            ->setDiplome('info')
            ->setExpAcademique('gggg')
            ->setExpProf('gggg')
            ->setFormation('gggg')
            ->setStage('gggg')
            ->setTitre('gggg')
            ->setIdDomaine('1')
            ->setIdUtilisateur('1');

        $data = $this->get('jms_serializer')->serialize($cv, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/ShowAllCv", methods={"GET","HEAD"})
     */
    public function getallCv()
    {
        $cv = $this->getDoctrine()
            ->getRepository('WorktnBundle:Cv')
            ->findAll();
        $data = $this->get('jms_serializer')->serialize($cv , 'json');
        $response = new Response($data);
        return $response;
    }

    /**
     * @Route("/ShowCvByID/{id}", methods={"GET","HEAD"})
     */
    public function getCvbyid(Cv $cv)
    {
        $data = $this->get('jms_serializer')->serialize($cv , 'json');
        $response = new Response($data);
        return $response;
    }

    /**
     * @Route("/DeleteCvByID/{id}", methods={"DELETE","HEAD"})
     */
    public function deleteCV(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $cv = $em
            ->getRepository('WorktnBundle:Cv')
            ->find($id);
        $em->remove($cv);
        $em->flush();

        return new JsonResponse(['supprimé' => 'succes'], 200);
    }


    /**
     * @Route("/updateCv/{id}", methods={"PUT","HEAD"})
     */
    public function UpdateCvAction(Request $request)
    {

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $cvnew = $doctrine
            ->getRepository('WorktnBundle:Cv')
            ->find($request->get('id'));

        $data = $request->getContent();
        $cvold = $this->get('jms_serializer')->deserialize($data,Cv::class,'json');

  /*      $cvnew
            ->setAnneeObtention('2018')
            ->setCompetences('ffffff')
            ->setDiplome('info')
            ->setExpAcademique('gggg')
            ->setExpProf('gggg')
            ->setFormation('gggg')
            ->setStage('gggg')
            ->setTitre('gggg')
            ->setIdDomaine('2')
            ->setIdUtilisateur('1');
        $manager->persist($cvnew);
        $manager->flush();*/
        $cvnew
            ->setAnneeObtention($cvold->getAnneeObtention())
            ->setCompetences($cvold->getCompetences())
            ->setDiplome($cvold->getDiplome())
            ->setExpAcademique($cvold->getExpAcademique())
            ->setExpProf($cvold->getExpProf())
            ->setFormation($cvold->getFormation())
            ->setStage($cvold->getStage())
           /* ->setTitree($cvold->getTitre())*/
            ->setIdDomaine($cvold->getIdDomaine())
            ->setIdUtilisateur($cvold->getIdUtilisateur());
        $manager->persist($cvnew);
        $manager->flush();

        return new JsonResponse(['modifier' => 'succes'], 200);
    }

    /**
     * @Route("/AddCv", methods={"POST","HEAD"})
     */
    public function addCv(Request $request){
        //recuperer les donnees a partir de postman
        $data = $request->getContent();
        //deserialisation
        $cv = $this->get('jms_serializer')
            ->deserialize($data,Cv::class,'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($cv);
        //enregister Session
        $em->flush();
        return new Response('Session Added Successfully','201');

    }

}
