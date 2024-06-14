

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** Clase para validar el ingreso de usuarios en la base de datos */
class Administrador_model extends CI_Model {


    public function __construct(){
		parent::__construct();
		$this->load->database();


    }	
    
    public function getTodosLosUsuarios(){
        $consulta = $this->db->query("SELECT * FROM usuarios;");
    
        return $consulta;
    }
    public function cambiarContrasenaEstandar($idUsuario){
        /**cada dato se debe recibir como $abc->nombreCOLUMNA */
        $consulta=$this->db->query("  SELECT rutUsuario 
                                        FROM usuarios 
                                        WHERE idUsuario=".$idUsuario.";");
        $RutUsuario=$consulta->row();
        /**quita los puntos y guion del rut obtenido */

        $rutConCaracteresAlfaNumericos=preg_replace('([^A-Za-z0-9 ])', '', $RutUsuario->rutUsuario);

        /**obtener los ultimos 4 caracteres del rut */

        $contrasenaEstandar=substr($rutConCaracteresAlfaNumericos, -4, 4);

        $contrasenaEstandarInsertada = $this->db->query("UPDATE usuarios SET contrasena = ".$contrasenaEstandar." WHERE idUsuario=$idUsuario");

        /**retorna un 1 si se hizo la actualizacion */
        /** */
        return $contrasenaEstandarInsertada;
        
    }
    public function cambiarEstadoDeUsuario($idUsuario){
        $consulta=$this->db->query("     SELECT habilitado 
                                                FROM usuarios 
                                                WHERE idUsuario=".$idUsuario.";");
        $estadoDeUsuario=$consulta->row();
        if( !(  $estadoDeUsuario->habilitado ) ){/**si el estado es inactivo */
        
            $estado=1;

        }else{/**si el estado es positivo */
        
            $estado=0;
        }
        $actualizarEstado = $this->db->query("UPDATE usuarios SET habilitado = ".$estado." WHERE idUsuario=".$idUsuario.";");
        return $actualizarEstado;
    }



    
}