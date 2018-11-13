<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SidebarController extends Controller
{
    public function lastGames()
    {
           $lastGames = [
                [
                 'date' => \DateTimeImmutable::createFromFormat('d.m.Y', '13.01.2018'),
                 'text' => 'Das könnte dein Text sein'
                ],
                [
                 'date' => \DateTimeImmutable::createFromFormat('d.m.Y', '14.01.2018'),
                 'text' => 'Das könnte dein Text sein 2'
                ]
           ];

           return $this->render(
                'sidebar/last_games.html.twig', ['games' => $lastGames]
           );

    }


    public function lastPlayers()
    {
        $players = ['Elaine','Sophia','Josephine','Finja'];

            return $this->render(
                'sidebar/last_players.html.twig',
                ['players' => $players]
            );

    }

}