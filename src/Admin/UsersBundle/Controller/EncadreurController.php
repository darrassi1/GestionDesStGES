<?php

namespace Admin\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\UsersBundle\Entity\Encadreur;
use Admin\UsersBundle\Form\EncadreurType;

/**
 * Encadreur controller.
 *
 */
class EncadreurController extends Controller
{

    /**
     * Lists all Encadreur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Encadreur')->findAll();

        return $this->render('AdminUsersBundle:Encadreur:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Encadreur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Encadreur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('GestionUsersEn_show', array('id' => $entity->getId())));
        }

        return $this->render('AdminUsersBundle:Encadreur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function createAdminencAction(Request $request)
    {

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'You can access this only using Ajax!'), 400);
            
        }

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $user->addRole("ROLE_STUD");
            $userManager->updateUser($user);
            return new JsonResponse(array('message' => 'Success!'), 200);
        }

        $response = new JsonResponse(
            array(     $form['username'] => 'Error'), 400);

        return $response;

    }

    /**
     * Creates a form to create a Encadreur entity.
     *
     * @param Encadreur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Encadreur $entity)
    {
        $form = $this->createForm(new EncadreurType(), $entity, array(
            'action' => $this->generateUrl('GestionUsersEn_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Encadreur entity.
     *
     */
    public function newAction()
    {
        $entity = new Encadreur();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdminUsersBundle:Encadreur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Encadreur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Encadreur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encadreur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Encadreur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Encadreur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Encadreur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encadreur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Encadreur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Encadreur entity.
    *
    * @param Encadreur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Encadreur $entity)
    {
        $form = $this->createForm(new EncadreurType(), $entity, array(
            'action' => $this->generateUrl('GestionUsersEn_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Encadreur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Encadreur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encadreur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('GestionUsersEn_edit', array('id' => $id)));
        }

        return $this->render('AdminUsersBundle:Encadreur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Encadreur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUsersBundle:Encadreur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Encadreur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('GestionUsersEn'));
    }

    /**
     * Creates a form to delete a Encadreur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('GestionUsersEn_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
