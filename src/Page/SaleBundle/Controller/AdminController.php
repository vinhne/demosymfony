<?php

namespace Page\SaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Page\SaleBundle\Entity\Users;
use Page\SaleBundle\Entity\CategogyUsers;

use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("")
     * @Template()
     */
	
	 
    public function indexAction()
    {
		$admin = $this->sercurity();
		   return $this->render('PageSaleBundle:Admin:index.html.twig', array(
				'Admin'=> $admin
			));	
		
		

    }
	
	 private function sercurity(){
	 
		$auth = null;
        $repository = $this->getDoctrine()->getRepository('PageSaleBundle:Users');
        $auth = $repository->checkAuthenticate();		

        if (!$auth) 
		{	 
			header("location: ".$this->generateUrl('_admin_login')); die();
			//return $this->redirect($this->generateUrl('_admin_login'));			
		}
		else
		    return $auth;
    }
	
	public function loginAction()
    {
	
		//Post---admin/login
		 if ($this->getRequest()->getMethod() == 'POST'){
            $requestData = $this->getRequest()->request;
            $form = $requestData->get('form');
			//print_r($form);
			
			$repository = $this->getDoctrine()->getRepository('PageSaleBundle:Users');
			$result = $repository->is_user($form['username'],($form['password']));
			if(count($result)>0)
			{
				 $repository->setAuthenticate($result);
				 return	 $this->redirect($this->generateUrl('_admin'));
			}
			
			
		}
		
		
		
		// Login -----
		$users = new Users();
		$form = $this->createFormBuilder($users)
				->add('username', 'text', array('label'=>"Tên đăng nhập",'required'    => true))	 
				->add('password', 'password',array('label'=>"Mật khẩu",'required'    => true))		
				->add('save', 'submit')
				->getForm();
		
       return $this->render('PageSaleBundle:Admin:login.html.twig', array(
			'form' => $form->createView(),
        ));	

    }
	
	public function logoutAction(){
        $repository = $this->getDoctrine()->getRepository('PageSaleBundle:Users');
        $repository->clearAuthenticate();
        return $this->redirect($this->generateUrl('_admin_login'));
    }
	
	
	
}
