<?php

namespace Admin\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\UsersBundle\Entity\Administration;
use Admin\UsersBundle\Form\AdministrationType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Administration controller.
 *
 */
class AdministrationController extends Controller
{

    /**
     * Lists all Administration entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Administration')->findAll();

        return $this->render('AdminUsersBundle:Administration:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Administration entity.
     *
     */
    public function createAdminProfAction(Request $request)
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
            $user->addRole("ROLE_ADMIN");
            $userManager->updateUser($user);
            return new JsonResponse(array('message' => 'Success!'), 200);
    }

                $response = new JsonResponse(
                array(     $form['username'] => 'Error'), 400);

                return $response;

    }
    /**
     * `s a new Administration entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Administration();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setImgSrc("/Backoffice/assets/images/default-user.png");
            $em->persist($entity);
            $em->flush();

            return new JsonResponse(array('message' => 'Success!'), 200);
        }

        $response = new JsonResponse(
            array(
                'message' => 'Error',
                'form' => $this->renderView('AdminUsersBundle:Administration:new.html.twig',
                    array(
                        'entity' => $entity,
                        'form' => $form->createView(),
                    ))), 400);

        return $response;
    }

    /**
     * Creates a form to create a Administration entity.
     *
     * @param Administration $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Administration $entity)
    {
        $form = $this->createForm(new AdministrationType(), $entity, array(
            'action' => $this->generateUrl('Administration_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Administration entity.
     *
     */
    public function newAction()
    {
        $entity = new Administration();
        $form   = $this->createCreateForm($entity);



        /*
                      return $this->render('AdminUsersBundle:Administration:new.html.twig', array(
                           'entity' => $entity,
                           'form'   => $form->createView(),
                           'formR' => $formR->createView(),
                       ));

       */
                      $response= $this->renderView('AdminUsersBundle:Administration:new.html.twig', array(
                           'entity' => $entity,
                           'form'   => $form->createView(),
                       ));
                       return new JsonResponse(utf8_encode( $response ));

    }

    /**
     * Finds and displays a Administration entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Administration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administration entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Administration:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));

    }

    /**
     * Displays a form to edit an existing Administration entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Administration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administration entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminUsersBundle:Administration:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Administration entity.
    *
    * @param Administration $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Administration $entity)
    {
        $form = $this->createForm(new AdministrationType(), $entity, array(
            'action' => $this->generateUrl('Administration_update', array('id' => $entity->getIdadmin())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Administration entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminUsersBundle:Administration')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administration entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {$em = $this->getDoctrine()->getManager();
            $name =  'Profil_'.rand().'.jpg';

            $editForm['imgSrc']->getData()->move("uploads/images/", $name);

            $entity->setImgSrc("uploads/images/". $name);
            $em->persist($entity);
            $em->flush();

            $response = new \Symfony\Component\HttpFoundation\Response(json_encode("1"));

            return $response;
        }


        $response = new \Symfony\Component\HttpFoundation\Response(json_encode($request));

        return $response;
    }
    /**
     * Deletes a Administration entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminUsersBundle:Administration')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Administration entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Administration'));
    }

    /**
     * Creates a form to delete a Administration entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Administration_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
