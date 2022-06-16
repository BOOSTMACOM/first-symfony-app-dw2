<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lucky")
 */
class LuckyController extends AbstractController
{

    /**
     * @Route("/number", name="app_lucky_number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("/letter", name="app_lucky_letter")
     */
    public function letter(): Response
    {
        // Random alphabet letter
        $letter = chr(rand(ord('a'), ord('z')));

        return $this->render('lucky/letter.html.twig', [
            'letter' => $letter,
        ]);
    }

}