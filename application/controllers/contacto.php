<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->library('form_validation');	
		$this->load->library('session');
		$this->load->helper('email');
		
	}


	public function  index(){
		
		$this->load->view('header');

		if($dados=$this->input->post()){
			
			$this->form_validation->set_rules('NOME','Nome','required');
			$this->form_validation->set_rules('TELEFONE','Telefone','required|integer|exact_length[9]');
			$this->form_validation->set_rules('EMAIL','E-mail','required|valid_email');
			$this->form_validation->set_rules('MENSAGEM','Mensagem','required');

			if ($this->form_validation->run()==TRUE){
				$to = 'heldergoncalves92@live.com.pt';
				$subject = 'Terapia da Fala - Site';
				$body= 'Nome: '.$dados['NOME'].'
				Contacto:'.$dados['TELEFONE'].'
				E-mail: '.$dados['EMAIL'].'
				Mensagem: '.$dados['MENSAGEM'];

				//mail($to,$subject,$body);
				echo('ENVIOU!!');
			}
		}
		
		$this->load->view('contacto');

		$this->load->view('footer');

		
	}
}?>