<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct(){
		parent::__construct();
		$this->load->database();
	

	}

	public function crearUsuario($datos){
		
		$datos = array(
            'nombre_usuario'=>$datos['nombre_usuario'],
            'correo_electronico'=>$datos['correo'],
            'contraseña'=>$datos['contrasena'],
            'status'=> 1,
            'rango'=> 2,
        );

        if( !$this->db->insert('usuarios', $datos) ){
            return false;

        }
        return true;
        
    }

}