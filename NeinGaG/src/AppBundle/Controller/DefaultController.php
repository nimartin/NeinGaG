<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function getAllGags(Request $request)
    {
       

        return $this->render('default/number.html.twig', array(
            'number' => $number,
        ));
    }

    public function numberAction()
    {
        
    }
}
