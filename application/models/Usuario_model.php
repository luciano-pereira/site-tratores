<?php
class Usuario_model extends CI_Model{

    public function logar($usuario, $senha){
        
        $this->db->where("usuario", $usuario);
        $this->db->where("senha", $senha);
        $result =  $this->db->get("usuarios");
        if($result->num_rows() == 1){
            $usuario = $result->row();
            $this->session->set_userdata("usuario_id", $usuario->id);
            redirect("painel");
        }else{
            redirect("login");
        }
    }


    public function selectuserid($id){
        $this->db->where("id", $id);
        return $this->db->get("falecimentos")->row();
    }








}
