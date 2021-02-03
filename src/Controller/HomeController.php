<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @param SkillRepository $skillRepository
     * @return Response
     */
    public function index(SkillRepository $skillRepository): Response
    {
        $skills = $skillRepository->findAll();

        return $this->render('home/home.html.twig', [
            'skills' => $skills,
        ]);
    }
}