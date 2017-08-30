<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 30.08.17
 * Time: 17:48
 */

namespace AppBundle\Controller;


use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends Controller
{

    /**
     * @Route(path="/users", name = "users")
     */
    public function resultAction(Request $request, EntityManager $entityManager) {
        if ($request->isMethod("post")) {
            $lastname = $request->request->get("lastname");
            $query = $entityManager->createQuery("select u from AppBundle:Users u where u.cuserfamilyname LIKE :lastname");
            $query->setParameter("lastname", "%{$lastname}%");
        } else {
            $query = $entityManager->createQuery("select u from AppBundle:Users u");
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
        return $this->render("user/index.html.twig", array('pagination' => $pagination));
    }
}