<?php

namespace App\Controller;

use App\Entity\Region;
use App\Form\RegionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(Request $request)
    {
        $region = new Region();
        $form = $this->createForm(RegionType::class, $region);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($region);
        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
