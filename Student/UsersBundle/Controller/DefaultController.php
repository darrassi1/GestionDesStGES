<?php

namespace Student\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StudentUsersBundle:Default:index.html.twig');
    }
    public function ProfileAction()
    {
        return $this->render('StudentUsersBundle:Default:index.html.twig');
    }
    public function messagesAction()
    {
        return $this->render('StudentUsersBundle:Default:index.html.twig');
    }
    public function agendaAction()
    {
        return $this->render('StudentUsersBundle:Default:index.html.twig');
    }
    public function gestionstagesAction()
    {
        return $this->render('StudentUsersBundle:Default:index.html.twig');
    }
    public function gestionsoutenancesAction()
    {
        return $this->render('StudentUsersBundle:Default:index.html.twig');
    }
}
