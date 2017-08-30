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
use Symfony\Component\Routing\Annotation\Route;

class ResultController extends Controller
{

    /**
     * @Route(path="/result", name = "result")
     */
    public function resultAction(EntityManager $entityManager) {
        //$entityManager->createQuery("select *")

        return $this->render("result/index.html.twig");
    }
}