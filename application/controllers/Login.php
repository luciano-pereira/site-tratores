<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model("usuario_model");
        $this->load->library('form_validation');
    }
	public function Index()
	{
		$this->load->view('login');
    }

    public function deslogar(){
        $this->session->unset_userdata("usuario_id");
        redirect("login");
    }
    
    public function entrar(){
		$config = array(
            array(
                'field' => 'usuario',
                'rules' => 'required'
            ),
            array(
                'field' => 'senha',
                'rules' => 'required',
            )
        );
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE){
            $this->load->view('login');
        }else{
            $usuario = $this->input->post("usuario");
            $senha = $this->input->post("senha");
            $this->usuario_model->logar($usuario, $senha);
        }
    }

}