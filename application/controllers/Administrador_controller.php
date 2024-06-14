<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->model('Administrador_model');

		//$this->load->helper(array('getMenu'));
	}

	public function index(){
		
		/*
		$nombreDeUsuario = "admin";
		$correoElectronicoUsuario = "admin@admin.cl";
		$datosUsuario = array("nombreDeUsuario"=>$nombreDeUsuario,"correoElectronicoUsuario"=>$correoElectronicoUsuario);
		$data["usuario"]=json_encode($datosUsuario);
		//$data['menu']=main_menu();*/


//if($this->session->userdata('is_logged')){
		$this->load->view('administrador_view');
/*
}else{
	show_404();
}*/
	}
	public function mostrarUsuarios(){
		$query=$this->Administrador_model->getTodosLosUsuarios();
        $i=9;
        foreach ($query->result() as $fila){
            $ejemploArray_JSON[]=array(
                                    'id'=>$i,//$fila->id,
                                    'nombreUsuarios'=> $fila->nombre_usuario,
                                    "accion"=>' <div class="btn-group">
                                                    <button type="button" class="btn btn-success">crear</button>
                                                    <button type="button" class="btn btn-warning">Modificar</button>
                                                    <button type="button" class="btn btn-danger">eliminar</button>
                                                </div> '
                                    
                                    /*"<button class='btn btn-primary'>".$fila->id."_".$fila->nombre_usuario."</button>"*/
                                );
                                $i++;

        };
        $resultado = array("data"=>$ejemploArray_JSON);
        echo json_encode($resultado);
        

        exit();
    }

}

	




