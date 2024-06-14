<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** Clase para validar el ingreso de usuarios en la base de datos */
class PruebaDB_model extends CI_Model {


    public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getTodo(){
    $query = $this->db->query("SELECT * FROM usuarios ;");
    
    return $query;
    }

    public function cambiar($nombreUsuario){
    $query = $this->db->query("UPDATE usuarios SET nombre_usuario = ".$nombreUsuario." WHERE id=3");
    echo $query;
    return $query;
    }
    public function agregar($nombreUsuario){
        

    $query = $this->db->query("INSERT INTO `usuarios`(`nombre_usuario`) VALUES ('$nombreUsuario')");
    return $query;

    }
    
    public function getPreguntas(){
    $consulta = $this->db->query("SELECT pregunta FROM preguntascuestionariomslq ;");
    
    return $consulta;


    }

}