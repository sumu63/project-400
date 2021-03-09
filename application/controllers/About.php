<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


public function__construct()
{
	parent::__construct();

	$this->load->model('MemberModel');
}
public function index()
{

	$data['view_page']='about/about_us';
	$this->load->view('site',$data);
}
public function TEAM()
	{
		$data['members']=$this->MemberModel->getAllMembers();
		$data['view_page']='about/team_members';

		$this->load->view('site',$data);
		
		
	}