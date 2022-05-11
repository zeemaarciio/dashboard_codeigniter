<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		
		//verifica se o usuario nao está logado e redireciona para a autenticação
		if(!$this->session->userdata('logado')){
			
			redirect('admin_dashboard/sign_in');
		}
		
	}

	//Exibir informações sobre o nosso sistema
	public function index(){
		
		$alerta = null;
		
		$dados = array(
			"alerta" => $alerta,
			"view"	 => 'dashboard/index',
			"email"  => $this->session->get_userdata()['email']
		);
		$this->load->view('template', $dados);
	}
	
}
