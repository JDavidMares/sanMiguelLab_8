<?php
namespace App\Controller;

use Doctrine\ORM\Query\Expr\Func;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LandingPageController extends AbstractController
{
    public function __construct()
    {

    }

    public function get_landing_page (){
        return $this->render('general_views/landing_page.html.twig');
    }
}