<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areas_intervencao extends CI_Controller {

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
		$this->load->view('areas_intervencao');
		$this->load->view('footer');
		
	}
}?>