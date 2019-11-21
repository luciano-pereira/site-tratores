<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model("produto_model");
	}


	public function Index()
	{
		$dados['categorias'] = $this->produto_model->listarcategorias();
		$this->load->view('produtos', $dados);
	}






}