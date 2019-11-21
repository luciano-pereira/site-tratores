<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}



	public function email(){
        $this->load->library('email');
        $nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$assunto = $this->input->post('assunto');
        $mensagem = $this->input->post('mensagem');
    
        $corpo = 'CONTATO SITE JUCA TRATORES
        Nome: '.$nome.'
        Email: '.$email.'
        Assunto: '.$assunto.'
        Mensagem: '.$mensagem.' ';

        $to = "jucatratores01@hotmail.com";
        $this->email->from("contato@jucatratores.com.br");
        $this->email->to($to);
        $this->email->subject(''.$assunto.'');
        $this->email->message($corpo);
        if($this->email->send()){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Mensagem enviada!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>erro ao enviar mensagem, tente diretamente pelo email jucatratores01@hotmail.com</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
		}
	}



}
