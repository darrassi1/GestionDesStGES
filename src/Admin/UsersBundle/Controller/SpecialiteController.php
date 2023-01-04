<?php

namespace Admin\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\UsersBundle\Entity\Specialite;
use Admin\UsersBundle\Form\SpecialiteType;

/**
 * Specialite controller.
 *
 */
class SpecialiteController extends Controller
{

    /**
     * Lists all Specialite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Specialite')->findAll();

        return $this->render('AdminUsersBundle:Specialite:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Specialite entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Specialite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Specialite_show', array('id' => $entity->getId())));
        }

        return $this->render('AdminUsersBundle:Specialite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Specialite entity.
     *
     * @param Specialite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Specialite $entity)
    {
        $form = $this->createForm(new SpecialiteType(), $entity, array(
            'action' => $this->generateUrl('Specialite_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Specialite entity.
     *
     */
    public function newAction()
    {
        $entity = new Specialite();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdminUsersBundle:Specialite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Specialite entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Specialite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Specialite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Specialite:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Specialite entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Specialite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Specialite entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Specialite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Specialite entity.
    *
    * @param Specialite $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Specialite $entity)
    {
        $form = $this->createForm(new SpecialiteType(), $entity, array(
            'action' => $this->generateUrl('Specialite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Specialite entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Specialite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Specialite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Specialite_edit', array('id' => $id)));
        }

        return $this->render('AdminUsersBundle:Specialite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Specialite entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUsersBundle:Specialite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Specialite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Specialite'));
    }

    /**
     * Creates a form to delete a Specialite entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Specialite_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
