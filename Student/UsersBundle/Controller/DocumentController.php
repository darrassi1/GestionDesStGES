<?php

namespace Student\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Student\UsersBundle\Entity\Document;
use Student\UsersBundle\Form\DocumentType;

/**
 * Document controller.
 *
 */
class DocumentController extends Controller
{

    /**
     * Lists all Document entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('StudentUsersBundle:Document')->findAll();

        return $this->render('StudentUsersBundle:Document:index.html.twig', array(
            'entities' => $entities,
        ));
    }
}
