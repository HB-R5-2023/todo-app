<?php

namespace App\Controller;

use App\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  #[Route('/', name: 'app_home')]
  public function index(): Response
  {
    // Données
    $tasks = [
      new Task("action"),
      new Task("beyond", true),
      new Task("fast"),
      new Task("branch"),
      new Task("catch", true),
      new Task("stuck", true),
    ];

    return $this->render('home/index.html.twig', [
      'tasks' => $tasks,
    ]);
  }
}
