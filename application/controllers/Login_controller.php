<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
		
		$this->load->helper(array('autenticaciones/reglasDeLogin'));

		$this->load->model('Autenticar_model');

	}

	public function index(){

		$this->load->view('login_view');
	}
	public function validarLogin(){
		
		$reglasDeValidacionDLogin	=	getReglasDeLogin();


		$this->form_validation->set_rules($reglasDeValidacionDLogin);

		//si en el formulario login no se ingresan los datos requeridos lanza los mensajes de error
		if(	 $this->form_validation->run() === FALSE){

			//recarga la pagina con los errores a la vista
			
			//en caso de que los campos esten vacios lanza los errores de 
			
			$this->output->set_status_header( 400 );
			
			$erroresDeValidacion = array(
				
				//error de input rut
				'login_rut' => form_error('login_rut'),
				
				//error de input contraseña
				'login_contrasena' => form_error('login_contrasena')
			);
			echo json_encode( $erroresDeValidacion );

		}else{

			/*obtener los datos ingresados desde la vista view/login_view.php 
			que son obtenidos en el formulario a travez de metodo post*/

			$usuario = $this->input->post('login_rut');
			$contrasena = $this->input->post('login_contrasena');

			if(	!$resultado = $this->Autenticar_model->login( $usuario , $contrasena )){
				
				/*si el metodo nos devuelve FALSE(si no se encuentra el usuario)
				 muestra mensaje en vista "credenciales invalidas"*/

				$mensaje = array( "mensajeDeCredeciales" => "Credenciales no válidas" );

				$this->output->set_status_header( 401 );

				echo json_encode( $mensaje );
				
				exit();
			}

			if($resultado->nombre_usuario=='8135176-7'){
				$paginaLogin='admin';
			}else{
				$paginaLogin="formulario";

			}

/**datos para crear la sesion */
			$data = array(
				'id' => $resultado->id,
				'nombreDeUsuario' => $resultado->nombre_usuario,
		 );
			$this->session->set_userdata($data);//se crea la sesion

			$mensaje = array( "url" => base_url( $paginaLogin ) );
			echo json_encode( $mensaje );
		}

	}
	public function logout(){
		
		$vars = array( 'id', 'nombreDeUsuario' );
		$this->session->unset_userdata($vars);
		$this->session->sess_destroy();
		redirect('/');

	}


}
