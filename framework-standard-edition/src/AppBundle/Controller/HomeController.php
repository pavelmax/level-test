<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 29.08.17
 * Time: 2:09
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{

    /**
     * @Route(path = "/home", name = "home")
     */
    public function indexAction() {
        return $this->render("home/index.html.twig");
    }


}