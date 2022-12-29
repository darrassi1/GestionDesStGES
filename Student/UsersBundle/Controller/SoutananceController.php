<?php

namespace Student\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Student\UsersBundle\Entity\Soutanance;
use Student\UsersBundle\Form\SoutananceType;

/**
 * Soutanance controller.
 *
 */
class SoutananceController extends Controller
{

    /**
     * Lists all Soutanance entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('StudentUsersBundle:Soutanance')->findAll();

        return $this->render('StudentUsersBundle:Soutanance:index.html.twig', array(
            'entities' => $entities,
        ));
    }


    /**
     * Finds and displays a Soutanance entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StudentUsersBundle:Soutanance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Soutanance entity.');
        }


        return $this->render('StudentUsersBundle:Soutanance:show.html.twig', array(
            'entity'      => $entity,
        ));
    }


}
