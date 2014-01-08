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


	public function index(){
		$this->load->view('header');
		$this->load->view('A_intervencao/areas_intervencao');
		$this->load->view('footer');
		
	}

	public function linguagem(){
		$this->load->view('header');
		$this->load->view('A_intervencao/linguagem');
		$this->load->view('footer');
		
	}

	public function voz(){
		$this->load->view('header');
		$this->load->view('A_intervencao/voz');
		$this->load->view('footer');
		
	}

	public function fluencia(){
		$this->load->view('header');
		$this->load->view('A_intervencao/fluencia');
		$this->load->view('footer');
		
	}

	public function degluticao_mastigacao(){
		$this->load->view('header');
		$this->load->view('A_intervencao/degluticao_mastigacao');
		$this->load->view('footer');
		
	}

	public function articulacao(){
		$this->load->view('header');
		$this->load->view('A_intervencao/articulacao');
		$this->load->view('footer');
		
	}
}?>