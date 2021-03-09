<?php defined('BASEPATH') OR exit('No direct script access allowed ');

class Contact extends CI_Controller {

	function __construct() {
		parent:: __construct();
		//Load form validation library
		$this->load->library('form_validation');
	}

	public function index(){
		$data = $postData = array();

		//if contact  request is submitted
		if ($this->input->post('contactSubmit')){

			//Get the form data
			$formData = $this->input->post();

			//Form field validation rules
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('message','
				message','required');


		}

		
	}
}