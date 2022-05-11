<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		
		//verifica se o usuario nao está logado e redireciona para a autenticação
		if(!$this->session->userdata('logado')){
			
			redirect('admin_dashboard/sign_in');
		}
		
	}

	//Exibir informações sobre o nosso sistema
	public function view(){
		
		$alerta = null;
		
		$this->load->model('usuarios_model');
		$users = $this->usuarios_model->get_users();
		
		$dados = array(
			"alerta"   => $alerta,
			"usuarios" => $users, //aqui passa a variavel $users para o view, que irá trazer os dados do banco e mostrar na tela
			"view"	   => 'usuario/view'
		);
		
		$this->load->view('template', $dados); //passa $dados como parametro para receber na view
	}
	
}
