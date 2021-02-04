<?php

namespace App\Controller;

use App\Repository\PortfolioRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @param SkillRepository $skillRepository
     * @param PortfolioRepository $portfolioRepository
     * @return Response
     */
    public function index(SkillRepository $skillRepository, PortfolioRepository $portfolioRepository): Response
    {
        $skills = $skillRepository->findAll();
        $portfolios = $portfolioRepository->findAll();

        return $this->render('home/home.html.twig', [
            'skills' => $skills,
            'portfolios' => $portfolios
        ]);
    }
}