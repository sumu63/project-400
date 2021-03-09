<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	

	public function index()
	{
		$data['title']='Home | Welcome to Traversal';
		$data['view_page']='homepage';

		

        
		$this->load->view('site',$data);
		
		
	}
	public function ABOUT()
	{
		$data['title']='About Us | Traversal';
		$data['view_page']='about_us';

		$this->load->view('site',$data);
		
		
	}
	public function SERVICE()
	{
		$data['title']='Service | Traversal';
		$data['view_page']='Services';

		$this->load->view('site',$data);
		
		
	}
	public function CONTACT()
	{
		$data['title']='Contact | Traversal';
		$data['view_page']='Contact';

		

     $this->load->view('site',$data);
		

	}	
		
	}
	



