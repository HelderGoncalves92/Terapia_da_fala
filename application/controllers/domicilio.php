<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Domicilio extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->library('form_validation');	
		$this->load->library('session');
		$this->load->model('user','usermodel');
	}


	public function  index(){
		//$var=$this->usermodel->get();
		
		$this->load->view('header');
		$this->load->view('terapia_domicilio');

		$this->load->view('footer');
		
	}
}?>