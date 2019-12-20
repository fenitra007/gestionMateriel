<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{
    /**
     * @Route("/admin/membre", name="security.register")
     */
    public function index(Request $request,ObjectManager $manager,UserPasswordEncoderInterface $encoder,UserRepository $repoUser)
    {
        $user = new User();
        $affichUser = $repoUser->findAll();

        $form = $this->createForm(RegisterType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $mdp = $user->getPassword();
            $mdpCrypt = $encoder->encodePassword($user, $mdp);
            $user->setPassword($mdpCrypt);

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('security.register');
        }
        
        return $this->render('security/register.html.twig', [
            'formRegister' => $form->createView(),
            'affichUser' => $affichUser
        ]);
    }

     /**
      * @Route("/admin/{id}", name="security.delete")
      */

      //  * @Route("/admin/{id}", name="security.delete",methods={"DELETE"})

    public function suppression(User $user,ObjectManager $manager,Request $request){
        $manager->remove($user);
        $manager->flush();
        return $this->redirectToRoute('security.register');
    }

    /**
     * @Route("/admin/membre/{id}", name="security.update")
     */
    public function modifier(Request $request,ObjectManager $manager,UserPasswordEncoderInterface $encoder,UserRepository $repoUser)
    {
        $user = new User();
        $affichUser = $repoUser->findAll();

        $form = $this->createForm(RegisterType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $mdp = $user->getPassword();
            $mdpCrypt = $encoder->encodePassword($user, $mdp);
            $user->setPassword($mdpCrypt);

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('security.register');
        }
        
        return $this->render('security/register.html.twig', [
            'formRegister' => $form->createView(),
            'affichUser' => $affichUser
        ]);
    }
}
