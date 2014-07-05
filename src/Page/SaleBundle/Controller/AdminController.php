<?php

namespace Page\SaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    /**
     * @Route("")
     * @Template()
     */
    public function indexAction()
    {
		
       return $this->render('PageSaleBundle:Admin:index.html.twig', array(
			
        ));	

    }
}
