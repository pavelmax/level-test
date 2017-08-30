<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 29.08.17
 * Time: 2:09
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Tests;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{

    /**
     * @Route(path = "/home/", name = "home")
     */
    public function homeAction(Request $request) {
        if ($request->isMethod("post")) {
            $testName = $request->request->get("testName");
            $query = $this->getDoctrine()->getManager()->createQuery("select t from AppBundle:Tests t where t.ctestname LIKE :testName");
            $query->setParameter("testName", "%{$testName}%");
        } else {
            $query = $this->getDoctrine()->getRepository(Tests::class)->findAll();
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 7);
        return $this->render("home/index.html.twig", array('pagination' => $pagination));
    }

}