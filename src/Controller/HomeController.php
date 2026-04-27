<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(AuthenticationUtils $authenticationUtils, TaskRepository $taskRepository): Response
    {
        $user = $authenticationUtils->getLastUsername();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'user'=> $user,
            'tasks' => $taskRepository->findAll(),
        ]);
    }
}
