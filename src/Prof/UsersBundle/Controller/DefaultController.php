<?php

namespace Prof\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProfUsersBundle:Default:index.html.twig');
    }
}
