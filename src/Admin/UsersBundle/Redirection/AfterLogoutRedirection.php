<?php
/**
 * @copyright  Copyright (c) 2009-2014 Steven TITREN - www.webaki.com
 * @package    Webaki\UserBundle\Redirection
 * @author     Steven Titren <contact@webaki.com>
 */
 
namespace Admin\UsersBundle\Redirection;
 
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
 
class AfterLogoutRedirection implements LogoutSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;
 
    /**
     * @var \Symfony\Component\Security\Core\SecurityContextInterface
     */
    private $security;
 
    /**
     * @param SecurityContextInterface $security
     */
    public function __construct(RouterInterface $router, SecurityContextInterface $security)
    {
        $this->router = $router;
        $this->security = $security;
    }
 
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function onLogoutSuccess(Request $request)
    {
        // On récupère la liste des rôles d'un utilisateur
        $roles = $this->security->getToken()->getRoles();
        // On transforme le tableau d'instance en tableau simple
        $rolesTab = array_map(function($role){ 
            return $role->getRole(); 
        }, $roles);
        // Si c'est un commercial, admin ou un super admin on redirige vers la page de login. Ici nous utilisons la route de FOSUserBundle.
        if (in_array('ROLE_STUD', $rolesTab, true) ||in_array('ROLE_PROF', $rolesTab, true) || in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            $response = new RedirectResponse($this->router->generate('fos_user_security_login'));
        // Sinon on redirige vers la homepage
        else
            $response = new RedirectResponse($this->router->generate('homepage'));
 
        return $response;
    }
}