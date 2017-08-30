<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Tests;
use AppBundle\Service\MenuGenerate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 28.08.17
 * Time: 22:57
 */

class AdminController extends Controller
{

    /**
     * @Route(path = "/admin/{id}", name = "admin", requirements={"id"})
     */
    public function indexAction(MenuGenerate $menuGenerate, $id) {
        $menuGenerate->addLink("Список тестов", "/");

        return $this->render("admin/index.html.twig", array('htmlMenu' => $menuGenerate->generateView()));
    }

    /**
     * @Route(path="/admin/", name="dashboard_admin")
     */
    public function dashboardAction() {
        return $this->render("admin/index.html.twig");
    }

}
