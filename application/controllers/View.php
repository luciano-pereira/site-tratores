<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {


	public function __construct(){
        parent::__construct();
		$this->load->model("produto_model");
	}

	public function index()
	{
        $id = $this->input->get('id');
        $dados['produto'] = $this->produto_model->selectprodutoid($id);
		$this->load->view('view', $dados);
	}




}
