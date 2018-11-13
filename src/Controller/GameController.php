<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/{_locale}") */
class GameController extends Controller
{
    /** @Route("/home") */
    public function home()
    {
        return $this->render('game/home.html.twig');
    }

    /** @Route("/index") */
    public function index()
    {
        return $this->render('game/index.html.twig');
    }

    /** @Route("/won") */
    public function won()
    {
        return $this->render('game/won.html.twig');
    }

    /** @Route("/failed") */
    public function failed()
    {
        return $this->render('game/failed.html.twig');
    }
}