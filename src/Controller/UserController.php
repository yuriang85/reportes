<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $search = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);

            // comprobar si el usuario ya esta registrador
            if (!empty($search)) {
                $this->addFlash('error', User::REGISTRO_EXIST);
                return $this->redirectToRoute('user_new');
            }else

                if ($user->getUsertype() == 'ROLE_ADMIN') {
                    $user->setRoles(['ROLE_ADMIN']);
                }
                // ROLE_SOLIC -> rol para aprobar o cancelar solicitudes
                if ($user->getUsertype() == 'ROLE_TEC') {
                    $user->setRoles(['ROLE_TEC']);
                }
                // ROLE_SOLIC -> rol para aprobar o cancelar solicitudes
                if ($user->getUsertype() == 'ROLE_USER') {
                    $user->setRoles(['ROLE_USER']);
                }

                $plainPassword = $form['password']->getData();
                if (!empty($plainPassword)) {
                    $user->setPassword($passwordEncoder->encodePassword($user, $plainPassword)); // encriptar con symfony
                }
                $entityManager->persist($user);
                $entityManager->flush();
                $this->addFlash('success', User::REGISTRO_EXITOSO);
                return $this->redirectToRoute('user_index');

        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}
