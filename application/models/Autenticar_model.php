

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** Clase para validar el ingreso de usuarios en la base de datos */
class Autenticar_model extends CI_Model {


    public function __construct(){
		parent::__construct();
		$this->load->database();
	

	}

	public function login( $usuario, $contrasena ){
        $resultadoDeBusquedaDelUsuario = $this->db->get_where( 'usuarios' , array( 'id' => $contrasena , 'nombre_usuario' => $usuario ), 1 );

        if( !$resultadoDeBusquedaDelUsuario->result() ){
            /** SI NO SE ENCUENTRAN LOS DATOS RETORNA FALSO */
            return false;

        }
        return $resultadoDeBusquedaDelUsuario->row();
    }


}