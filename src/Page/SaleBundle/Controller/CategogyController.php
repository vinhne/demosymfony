<?php

namespace Page\SaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;




use Symfony\Component\HttpFoundation\Request;

	
use Page\SaleBundle\Entity\Categogy;	
use Page\SaleBundle\Entity\CategogyRepository;
use Symfony\Component\HttpFoundation\Session\Session;


class CategogyController extends Controller
{
    /**
     * @Route("")
     * @Template()
     */
	 
	 
	private function sercurity(){
	 
		$auth = null;
        $repository = $this->getDoctrine()->getRepository('PageSaleBundle:Users');
        $auth = $repository->checkAuthenticate();		

        if (!$auth) 
		{	 
			header("location: ".$this->generateUrl('_admin_login')); die();			
		}
		else
		    return $auth;
    }


	
    public function indexAction()
    {
		$admin  = $this->sercurity();

       return $this->render('PageSaleBundle:Categogy:index.html.twig', array(
			'Admin'=>$admin
        ));	

    }
	public function addAction()
	{
		
		
		$categogy = new Categogy();
		
		if ($this->getRequest()->getMethod() == 'POST'){
				$requestData = $this->getRequest()->request;
				$form = $requestData->get('form');
				
				
				$categogy->setName($form['name']);
				$categogy->setParentId($form['parent_id']);
				$categogy->setOrderS($form['orderS']);
				$categogy->setStatus($form['status']);
				
				
				
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($categogy);
				$em->flush();			
			}
			
			
			
		$repository = $this->getDoctrine()->getRepository('PageSaleBundle:Categogy');
		$list = $repository->retrieve_all('',0,0,false);
		$arr = null;
		foreach($list as $post) {		
			if($post->getParentId()==0)
			$arr[$post->getId()] = $post->getName();
		}

		
		$form = $this->createFormBuilder($categogy)
            ->add('name', 'text', array('label'=>'Tên danh mục'))
          
		   ->add('parent_id', 'choice', array(
				'choices' => $arr,
				'required'    => false,
				'empty_value' => '--Chọn--',
				'label'=>'Danh mục cha(nếu có)',
				'empty_data'  => null
			))
		   ->add('orderS', 'text',array('required'    => false,'label'=>'Thứ tự'))
			->add('status', 'choice', array(
				'choices' => array('0' => 'Hiện', '1' => 'Ẩn'),
				'preferred_choices' => array('0'),
				'label'=>'Trạng thái'
			))
            ->add('save', 'submit')
            ->getForm();
			
			
			
			
       return $this->render('PageSaleBundle:Categogy:add.html.twig', array(
			'form' => $form->createView(),
			'Admin'=> $this->sercurity()
        ));	

    }
	
	
        
	
	public function listcategogyAction()
	{
	
		$request = $this->getRequest();
		$name = $request->request->get('name'); 
		$page = $request->request->get('page'); 	
		
		
		$repository = $this->getDoctrine()->getRepository('PageSaleBundle:Categogy');
		$list = $repository->retrieve_all($name,0,0,false);
		
		
		$Categorys = $repository->retrieve_all($name,$page,10);
		
		
		
		$countpage = 0;
		if(count($list)%10==0)
			$countpage = (int)(count($list)/10);
		else
			$countpage = (int)(count($list)/10) + 1;
			
		
		
		echo  $this->renderView('PageSaleBundle:Categogy:ajaxcategogy.html.twig', array(
            'Categorys'        => $Categorys,
			'count'        => $countpage-1,
			));
		exit;
	}
	public function  deleteAction()
	{
		$request = $this->getRequest();
		$id = $request->request->get('id'); 
		$repository = $this->getDoctrine()->getRepository('PageSaleBundle:Categogy');
		$delete = $repository->delete($id);
		
		if($delete)
			echo "ok";
		else
			echo "no";
		exit;
	}
	
	public function  editAction()
	{
	
		echo "sdfd";
		die();
	}
	
	
	
	function ConVertVN($inputString)		
		{		
		$trans = array (	
		'á' => 'a', 'à' => 'a', '?' => 'a', 'ã' => 'a', '?' => 'a', 
		'Á' => 'A', 'À' => 'A', '?' => 'A', 'Ã' => 'A', '?' => 'A',		
		'â' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a',		
		'Â' => 'A', '?' => 'A', 'À' => 'A', '?' => 'A', '?' => 'A', '?' => 'A',	
		'a' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a',	
		'A' => 'A', '?' => 'A', '?' => 'A', '?' => 'A', '?' => 'A', '?' => 'A',		
		'é' => 'e', 'è' => 'e', '?' => 'e', '?' => 'e', '?' => 'e',				
		'É' => 'E', 'È' => 'E', '?' => 'E', '?' => 'E', '?' => 'E',			
		'ê' => 'e', '?' => 'e', '?' => 'e', '?' => 'e', '?' => 'e', '?' => 'e', 	
		'Ê' => 'E', '?' => 'E', '?' => 'E', '?' => 'E', '?' => 'E', '?' => 'E',	
		'í' => 'i', 'ì' => 'i', '?' => 'i', 'i' => 'i', '?' => 'i', 			
		'Í' => 'I', 'Ì' => 'I', '?' => 'I', 'I' => 'I', '?' => 'I',		
		'ó' => 'o', 'ò' => 'o', '?' => 'o', 'õ' => 'o', '?' => 'o', 	
		'Ó' => 'O', 'Ò' => 'O', '?' => 'O', 'Õ' => 'O', '?' => 'O',		
		'o' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o',	
		'O' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O',		
		'ô' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', 	
		'Ô' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O',	
		'ú' => 'u', 'ù' => 'u', '?' => 'u', 'u' => 'u', '?' => 'u', 		
		'Ú' => 'U', 'Ù' => 'U', '?' => 'U', 'U' => 'U', '?' => 'U',	
		'u' => 'u', '?' => 'u', '?' => 'u', '?' => 'u', '?' => 'u', '?' => 'u',	
		'U' => 'U', '?' => 'U', '?' => 'U', '?' => 'U', '?' => 'U', '?' => 'U',
		'ý' => 'y', '?' => 'y', '?' => 'y', '?' => 'y', '?' => 'y', 			
		'Ý' => 'Y', '?' => 'Y', '?' => 'Y', '?' => 'Y', '?' => 'Y',			
		'd' => 'd',				
		'Ð' => 'D',				   			
		' ' => '-' 			
		);					
		$string = strtr ( $inputString, $trans );  	
		$string = strtolower($string);		
		$string = preg_replace('/[^a-z0-9]+/i',' ', $string); 		
		$string = trim($string); 			
		$string = preg_replace('/ /', '-', $string);
		return $string;			
	}
}
