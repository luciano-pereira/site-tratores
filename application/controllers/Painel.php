<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {


	public function __construct(){
        parent::__construct();
		$this->load->model("usuario_model");
		$this->load->model("produto_model");
	}


	public function Index()
	{
		// Carrega a view da home
		$dados['categorias'] = $this->produto_model->listarcategorias();
		$this->load->view('painel', $dados);
	}

	public function pesquisa(){
		$id  = $this->input->post('busca');
		$limit = $this->input->post('limit');
		$start = $this->input->post('start');
	    $this->produto_model->pesquisa($id, $limit, $start); 

	  }

	public function show()
	{
		
        $data = $this->produto_model->listar($this->input->post('limit'), $this->input->post('start'));
        if($data->num_rows() > 0){
            foreach($data->result() as $row){
				echo '
			   
               <div class="col-sm-6 col-md-4 col-12 " style="margin-bottom:20px;">
				 <img src="uploads/'.$row->img1.'" class="img-fluid"  style="height:300px; width:100%;">
				 <div class="img-thumbnail">
				 <p >'.character_limiter($row->nome, 28).'</p>
				 <a class="btn btn-primary btn-lg active btn-sm"  href="'.base_url('view/').'?id='.$row->id_produto.'""
				 data-whatever="'.$row->id_produto.'"
				 data-whatevernome="'.$row->nome.'"
				 data-whatevermodelo="'.$row->modelo.'"
				 data-whatevervalor="'.$row->valor.'"
				 data-whateverdescricao="'.$row->descricao.'"
				 data-whatevercategoria="'.$row->fk_categoria.'"
				 data-whatevernome_img="./uploads/'.$row->img1.'"
				 >Ver mais</a>
				 </div>
                </div>
                ';
			}
        }

    }


	public function editar(){
		$id_produto = $this->input->post("id_produto");
		$dados['categorias'] = $this->produto_model->listarcategorias();
		$dados["produto"] = $this->produto_model->selectprodutoid($id_produto);
        $this->load->view("editar",  $dados);
	}



public function selectapagar(){
	$id_produto = $this->input->post("id_produto");
	$this->produto_model->selectapagar($id_produto);
}

	
	function fetch(){
		$this->produto_model->fetch();
	}




	
public function update(){
		$id_produto = $this->input->post("id_produto");
		$produto = array(
			"nome" => $this->input->post('nome'),
			"modelo" => $this->input->post('modelo'),
			"descricao" => $this->input->post('descricao'),
			"valor" => $this->input->post('valor'),
			"fk_categoria" => $this->input->post('fk_categoria'),
			);
			$this->produto_model->update($id_produto, $produto);
  }
  


  public function updatefoto(){

		if(!empty($_FILES['imagem']['name'])){
		$config['upload_path']   = 'uploads/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['encrypt_name']  = TRUE;
		$config['quality'] = 90;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('imagem'))
		{
			$data= array('error' => $this->upload->display_errors());
			$this->load->view('editar',$data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['quality'] = '20%';
			$nomeimg = $this->upload->data();
			$config['source_image'] = 'uploads/'.$this->upload->file_name;
			$config['maintain_ratio'] = TRUE;
            $config['width']  = 650;
            $config['height'] = 650;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
	


			$imgantes = $this->input->post('imgantes');
			if(!empty($imgantes)){
			unlink('uploads/'.$imgantes);
      }


      $img = $this->input->post('img');
      switch ($img) {
        case 'img1':
            $id_produto = $this->input->post("id_produto");
            $produto = array(
              "img1" => $nomeimg['file_name'],
            );
            $this->produto_model->update($id_produto, $produto);
            break;
        case 'img2':            
            $id_produto = $this->input->post("id_produto");
            $produto = array(
              "img2" => $nomeimg['file_name'],
            );
            $this->produto_model->update($id_produto, $produto);
            break;
        case 'img3':
            $id_produto = $this->input->post("id_produto");
            $produto = array(
              "img3" => $nomeimg['file_name'],
            );
            $this->produto_model->update($id_produto, $produto);
            break;
        case 'img4':
            $id_produto = $this->input->post("id_produto");
            $produto = array(
              "img4" => $nomeimg['file_name'],
            );
        case 'img5':
            $id_produto = $this->input->post("id_produto");
            $produto = array(
              "img5" => $nomeimg['file_name'],
            );
            $this->produto_model->update($id_produto, $produto);
            break;
    }

    }
	}
  
  }









	function cadastro(){

        $files = $_FILES;    
        $count = count($_FILES['userfile']['name']);
        if($count > 5){
            $this->session->set_flashdata("foto", "selecione até 5 fotos");
            redirect('painel');
            }
            else{

        for($i=0; $i<$count; $i++)
        {
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];
            $configi['upload_path'] = './uploads/';
            $configi['allowed_types'] = 'jpeg|jpg|png';
            $configi['encrypt_name'] = TRUE;
            $this->load->library('upload', $configi);
            if (!$this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());    
                $this->load->view('welcome_message', $error);
            }
            else
            {
                $dado = array('upload_data' => $this->upload->data());    
                $path= $dado['upload_data']['full_path'];
                $configi['image_library'] = 'gd2';
                $config['quality'] = '20%';
                $configi['source_image']   = $path;
                $configi['maintain_ratio'] = TRUE;
                $configi['width']  = 650;
                $configi['height'] = 650;
                $this->load->library('image_lib');
                $this->image_lib->initialize($configi);   
                $this->image_lib->resize();

                unset($configi);
                $this->load->library('image_lib');
                $this->image_lib->clear();
                

                $uploadData = $this->upload->data();     
                $filename = $uploadData['file_name'];              
                $data['totalFiles'][] = $filename;
                unset($uploadData);       
             }
            }


            if (empty($data['totalFiles'][0])){ $data['totalFiles'][0] = '';}
            if (empty($data['totalFiles'][1])){ $data['totalFiles'][1] = '';}
            if (empty($data['totalFiles'][2])){ $data['totalFiles'][2] = '';}
            if (empty($data['totalFiles'][3])){ $data['totalFiles'][3] = '';}
            if (empty($data['totalFiles'][4])){ $data['totalFiles'][4] = '';}
  
              $array = array(
                  'nome' => $this->input->post('nome'),
                  'modelo' => $this->input->post('modelo'),
                  'img1' => $data['totalFiles'][0],
                  'img2' => $data['totalFiles'][1],
                  'img3' => $data['totalFiles'][2],
				  'img4' => $data['totalFiles'][3],
				  'img5' => $data['totalFiles'][4],
				  "modelo" => $this->input->post('modelo'),
				  "descricao" => $this->input->post('descricao'),
				  "valor" => $this->input->post('valor'),
				  "fk_categoria" => $this->input->post('categoria_id'),
              );

            $this->produto_model->inserir($array);
            $this->session->set_flashdata("success", "produto cadastrado");
            redirect('painel');
            }
        }








}

