<?php

namespace Admin\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\UsersBundle\Entity\Administration;
use Admin\UsersBundle\Form\AdministrationType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM soutanancea WHERE `Date_Soutenance`>=(CURDATE()-INTERVAL 1 MONTH)");
        $statement->execute();
        $ThisMonth = $statement->fetchAll();
        $statement = $connection->prepare("SELECT * FROM soutanancea WHERE `Date_Soutenance`<=(CURDATE()-INTERVAL 1 MONTH)");
        $statement->execute();
        $LastMonth = $statement->fetchAll();
        $statement = $connection->prepare("SELECT * FROM soutanancea WHERE `Date_Soutenance`<=(CURDATE()-INTERVAL 1 MONTH)");
        $statement->execute();
        $LastMonth = $statement->fetchAll();
        $statement = $connection->prepare("SELECT * FROM `tuto_usera` WHERE `roles`='a:1:{i:0;s:10:\"ROLE_ADMIN\";}'");
        $statement->execute();
        $admis = $statement->fetchAll();
        $statement = $connection->prepare("SELECT * FROM `tuto_usera` WHERE `roles`='a:1:{i:0;s:9:\"ROLE_PROF\";}'");
        $statement->execute();
        $prof = $statement->fetchAll();
        $statement = $connection->prepare("SELECT * FROM `tuto_usera` WHERE `roles`='a:1:{i:0;s:9:\"ROLE_STUD\";}'");
        $statement->execute();
        $stud = $statement->fetchAll();
        $statement = $connection->prepare("SELECT count(*) as nbr,MONTH(`Date_Debut`) as month FROM `stagea` WHERE affect = 0 GROUP BY MONTH(`Date_Debut`)");
        $statement->execute();
        $stage0 = $statement->fetchAll();
        $statement = $connection->prepare("SELECT count(*) as nbr,MONTH(`Date_Debut`) as month FROM `stagea` WHERE affect = 1 GROUP BY MONTH(`Date_Debut`)");
        $statement->execute();
        $stage1 = $statement->fetchAll();
        return $this->render('AdminUsersBundle:Default:index.html.twig', array(
            'ThisMonth' => $ThisMonth,
            'LastMonth' => $LastMonth,
            'admin' => $admis,
            'prof' => $prof,
            'stud' => $stud,
            'stage0' => $stage0,
            'stage1' => $stage1,
        ));
    }
    public function ProfileAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getEntityManager();
        $profile = $em->getRepository('AdminUsersBundle:Administration')->findBy(array('iduser' => $user->getId()));

        return $this->render('AdminUsersBundle:Default:Profile.html.twig', array(
            'profile' => $profile,
        ));
    }
    public function  editAction($id, $firstname, $lastname, $birth, $emailaddress, $phone, $gender, $zipcode, $city, $password)
    {
        $em = $this->getDoctrine()->getManager();
        /*    $qb = $em->createQueryBuilder()->update('AdminUsersBundle:Administration', 'u')
            ->set('u.firstname','?1')
            ->set('u.lastname','?2')
            ->set('u.birth','?3')
            ->set('u.emailaddress','?4')
            ->set('u.phone','?5')
            ->set('u.gender','?6')
            ->set('u.zipcode','?7')
            ->set('u.city','?8')
            ->where('u.idadmin = :user_id')
            ->setParameter('user_id', $id)
            ->setParameter('1',  $firstname)
            ->setParameter('2',  $lastname)
            ->setParameter('3',  $birth)
            ->setParameter('4',  $emailaddress)
            ->setParameter('5',  $phone)
            ->setParameter('6',  $gender)
            ->setParameter('7',  $zipcode)
            ->setParameter('8',  $city)
            ->getQuery();
        $qb->execute();*/

        $response = new \Symfony\Component\HttpFoundation\Response(json_encode("1"));

        return $response;
    }
    public function MessagesAction()
    {
        return $this->render('AdminUsersBundle:Default:Messages.html.twig');
    }
    public function AgendaAction()
    {
        return $this->render('AdminUsersBundle:Default:Agenda.html.twig');
    }
    public function GestionUsersAction()
    {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->createUser();
        $user->setEnabled(true);


        $formR = $formFactory->createForm();
        $formR->setData($user);
        return $this->render('AdminUsersBundle:Default:GestionUsers.html.twig', array(
            'formR' => $formR->createView(),
        ));
    }
    public function GestionStagesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Stage')->findAll();

        return $this->render('AdminUsersBundle:Default:GestionStages.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function GestionRessourcesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Departement')->findAll();
        $entities2 = $em->getRepository('AdminUsersBundle:Specialite')->findAll();

        return $this->render('AdminUsersBundle:Default:GestionRessources.html.twig', array(
            'entities' => $entities,
            'entities2' => $entities2,
        ));
    }
    public function GestionDocsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Document')->findAll();

        return $this->render('AdminUsersBundle:Default:GestionDocs.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function GestionsoutenancesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminUsersBundle:Soutanance')->findAll();

        return $this->render('AdminUsersBundle:Default:Gestionsoutenances.html.twig', array(
            'entities' => $entities,
        ));
    }
}
