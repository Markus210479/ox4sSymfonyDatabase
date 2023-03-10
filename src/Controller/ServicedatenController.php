<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicedatenController extends AbstractController
{
    #[Route('/servicedaten', name: 'app_servicedaten')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('tabellendaten/servicedaten.html.twig', [$number]);
    }
}
?>