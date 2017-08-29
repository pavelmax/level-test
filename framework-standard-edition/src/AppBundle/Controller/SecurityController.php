<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 29.08.17
 * Time: 2:39
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller

{
    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @param AuthenticationUtils $authUtils
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        return $this->render("auth/login.html.twig", array("error" => $error, "lastUsername" => $lastUsername));
    }
}