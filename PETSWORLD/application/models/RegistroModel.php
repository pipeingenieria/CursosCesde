<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RegistroModel extends CI_Controller{
    public function insertar(){
        $usuario = array(
            "Nombre" => "Andres",
            "Apellido" => "Hernandez",
            );
        $this->db->insert("usuarios",$usuario);
    }
    
}
