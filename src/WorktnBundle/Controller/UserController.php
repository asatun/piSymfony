<?php


namespace WorktnBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{

    public function addUserAction(Request $request) {

        $data = $request->getContent();
        $pswd=$request->get(MD5('password'));
        $userFromJson = $this->get('jms_serializer')
            ->deserialize($data, 'WorktnBundle\Entity\User', 'json');

        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->createUser();

        $user=$userFromJson;
        $user->setPlainPassword($pswd);
        $userManager->updateUser($user);
        $this->getDoctrine()->getManager()->flush();
        return new Response('user ajouté avec succes',201);
    }


    public function showAllUsersAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users= $userManager->findUsers();
        $list= $this->get('jms_serializer')->serialize($users, 'json');
        $response = new Response($list);
        return $response;



    }

    public function  getUserByIdAction($id){
        $user = $this->getDoctrine()->getRepository('WorktnBundle:User')->find($id);
        $data = $this->get('jms_serializer')->serialize($user, 'json');
        $response = new Response($data);
        return $response;
    }

    public function updateUserAction(Request $request, $id){

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $updatedUser = $doctrine
            ->getRepository('WorktnBundle:User')
            ->find($id);

        $data = $request->getContent();
        $userFromJson = $this->get('jms_serializer')->deserialize($data,User::class,'json');

        $updatedUser
            ->setEmail($userFromJson->getEmail())
            ->setPassword($userFromJson->getPassword())
            ->setNom($userFromJson->getNom())
            ->setPrenom($userFromJson->getPrenom())
            ->setNomSte($userFromJson->getNomSte())
            ->setMatricFisc($userFromJson)->getMatricFisc();

        $manager->persist($updatedUser);
        $manager->flush();

        return new JsonResponse(['modifier' => 'succes'], 200);



    }

    public function deleteAction($id){
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $user = $manager->getRepository('WorktnBundle:User')->find($id);
        $manager->remove($user);
        $manager->flush();
        return new JsonResponse(['msg' => 'deleted with succes!'], 200);

    }


    public function postUserAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $email = $request->request->get('email');
        $username = $request->request->get('username');
        $password = $request->request->get('password');
        $nom=$request->request->get('nom');
        $prenom=$request->request->get('prenom');
        $nomSte=$request->request->get('nomSte');
        $roles=$request->request->get('roles');
        $matricFisc=$request->request->get('matricFisc');
        $idAbonnement=$request->request->get("idAbonnement");
        $email_exist = $userManager->findUserByEmail($email);
        $username_exist = $userManager->findUserByUsername($username);

        if($email_exist || $username_exist){
            $response = new JsonResponse();
            $response->setData("Username/Email ".$username."/".$email." user existe !! ");
            return $response;
        }
        $user = $userManager->createUser();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setEnabled(true);
        $user->setPlainPassword($password);
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setNomSte($nomSte);
        $user->setMatricFisc($matricFisc);
        $user->setIdAbonnement($idAbonnement);
        $user->addRole($roles);
        $userManager->updateUser($user, true);
        $response = new JsonResponse();
        $response->setData("User: ".$user->getUsername()." inscrit avec succes !");
        return $response;
    }














}