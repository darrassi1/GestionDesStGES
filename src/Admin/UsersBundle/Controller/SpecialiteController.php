<?php

namespace Admin\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\UsersBundle\Entity\Filliere;
use Admin\UsersBundle\Form\FilliereType;

/**
 * Filliere controller.
 *
 */
class FilliereController extends Controller
{

    /**
     * Lists all Filliere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Filliere')->findAll();

        return $this->render('AdminUsersBundle:Filliere:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Filliere entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Filliere();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Filliere_show', array('id' => $entity->getIdFilliere())));
        }

        return $this->render('AdminUsersBundle:Filliere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Filliere entity.
     *
     * @param Filliere $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Filliere $entity)
    {
        $form = $this->createForm(new FilliereType(), $entity, array(
            'action' => $this->generateUrl('Filliere_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Filliere entity.
     *
     */
    public function newAction()
    {
        $entity = new Filliere();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdminUsersBundle:Filliere:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Filliere entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Filliere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filliere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Filliere:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Filliere entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Filliere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filliere entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Filliere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Filliere entity.
     *
     * @param Filliere $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Filliere $entity)
    {
        $form = $this->createForm(new FilliereType(), $entity, array(
            'action' => $this->generateUrl('Filliere_update', array('id' => $entity->getIdFilliere())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Filliere entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Filliere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Filliere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Filliere_edit', array('id' => $id)));
        }

        return $this->render('AdminUsersBundle:Filliere:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Filliere entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUsersBundle:Filliere')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Filliere entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Filliere'));
    }

    /**
     * Creates a form to delete a Filliere entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Filliere_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }
}
