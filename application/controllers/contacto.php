<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->library('form_validation');	
		$this->load->library('session');
		
	}


	public function  index(){
		
		
		$this->load->view('header');
		$this->load->view('contacto');

		$this->load->view('footer');


	}
}?>