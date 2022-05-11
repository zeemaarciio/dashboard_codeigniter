<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_dashboard extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		
		if($this->session->userdata('logado')){
			if(!$this->uri->segment(2) == "sign_out"){
				
				redirect('dashboard');
			}
		}
		
	}

	public function sign_in(){
		
		$alerta = null;
		
		if($this->input->post('entrar') === "entrar"){
			if($this->input->post('captcha')) redirect('admin_dashboard/sign_in');
			
			//define as regras de validação
			$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
			$this->form_validation->set_rules('senha', 'SENHA', 'required|min_length[6]|max_length[20]');
			
			//executa as regras de validação
			if($this->form_validation->run() === TRUE){
				
				//carrega o model usuarios_model
				$this->load->model('usuarios_model');
				
				//armazenando os dados do formulario em variaveis
				$email = $this->input->post('email');
				$senha = $this->input->post('senha');
				
				//executando o método check_login do model
				$login_existe = $this->usuarios_model->check_login($email, $senha);
				
				//verifica se os dados digitados estao corretos
				if($login_existe){
					//login valido.. inicia sessao
					$usuario = $login_existe;
					
					//configura os dados da sessao
					$session = array(
				        'email'     => $usuario["email"],
				        'created'	=> $usuario["created"],
				        'logado' => TRUE
					);
					
					//inicializa a sessao
					$this->session->set_userdata($session);
					
					redirect('dashboard');
					
					
				}else{
					//login invalido
					$alerta = array(
					"class" => "danger",
					"mensagem" => "<strong>Atenção</strong> E-mail e/ou senha inválidos!"
					);
				}
				
			}else{
				
				$alerta = array(
					"class" => "danger",
					"mensagem" => validation_errors()
				);
			}
		}
		
		$dados = array(
			"alerta"	=> $alerta,
			//"view"  	=> 'admin_dashboard/sign_in',
			//"hidemenu"	=> TRUE
		);
		
		$this->load->view('admin_dashboard/sign_in', $dados);
	}
	
	public function sign_out(){
		//$this->session->unset_userdata('logado');
		$this->session->sess_destroy();
		
		redirect('admin_dashboard/sign_in');
	}
}
