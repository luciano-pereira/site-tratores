<?php
class Produto_model extends CI_Model{

    public function listarcategorias(){
        return $this->db->get("categoria")->result_array();
    }


    public function inserir($produto){
        $this->db->insert("produto", $produto);
  }

  public function pesquisa($id, $limit, $start)
{
      $this->db->select('*');
      $this->db->from('produto');
      $this->db->where('fk_categoria', $id);
     // $this->db->order_by("id_produto", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        foreach($query->result() as $row){
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


  public function selectprodutoid($id_produto){
    $this->db->where("id_produto", $id_produto);
    return $this->db->get("produto")->row();
}




public function listar($limit, $start)
{
      $this->db->select('*');
      $this->db->from('produto');
      $this->db->order_by("id_produto", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
      return $query;
  }


public function update($id_produto, $produto){
  $this->db->where("id_produto", $id_produto);
  $this->db->update("produto", $produto);
}


 function fetch(){
    $this->datatables->select('id_produto, nome, img1, modelo')->from('produto');
    
    $this->datatables->add_column('img1', '<img src="uploads/$1" style="height:100px;">','img1' );

    $this->datatables->add_column('descricao', ' <form style="display: inline-block;" action="'.base_url().'painel/editar" method="post">
                                            <input type="hidden" value="$1" name="id_produto">
                                            <button style="padding: 2px 7px;" type="submit" class="btn btn-dark btn-sm"><span class="glyphicon glyphicon-pencil" style="font-size:18px;"></span></button>
                                            </form>
                                           
                                            <a style="padding: 2px 7px;" onclick="deletar($1)" name="id_produto" type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-trash" style="font-size:18px;"></span></a>
                                            
                                           ', 'id_produto');
    echo $this->datatables->generate();
}


 

  public function selectapagar($id_produto){
      $this->db->where("id_produto", $id_produto);
      $query = $this->db->get("produto");


      foreach ($query->result_array() as $row){
            if(!empty($row['img1'])){ unlink('./uploads/'.$row['img1']); }
            if(!empty($row['img2'])){ unlink('./uploads/'.$row['img2']); }
            if(!empty($row['img3'])){ unlink('./uploads/'.$row['img3']); }
            if(!empty($row['img4'])){ unlink('./uploads/'.$row['img4']); }
          }
          $this->apagar($id_produto);
      }


//função pra excluir do banco
    public function apagar($id_produto){
      $this->db->where("id_produto", $id_produto);
    $this->db->delete("produto");
    }



}
