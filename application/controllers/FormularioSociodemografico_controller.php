<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormularioSociodemografico_controller extends CI_Controller {


	public function __construct(){ 
		parent::__construct();


		$this->load->library('form_validation');

		$this->load->helper(array('autenticaciones/reglasDeFormularioSociodemografico'));
	
	}

	public function index(){
		$this->load->view('formularioSociodemografico_view');
	}

	public function validarFormularioSociodemografico(){
		
		$reglasDeFormularioSociodemografico	= getReglasDeFormularioSociodemografico();


		$this->form_validation->set_rules($reglasDeFormularioSociodemografico);

		
		//si en el formulario login no se ingresan los datos requeridos lanza los mensajes de error
		if(	 $this->form_validation->run() === FALSE){

			//en caso de que los campos esten vacios lanza los errores de "campos vacios"
			
			$this->output->set_status_header( 400 );

			$erroresDeValidacion  =  array(

        	/**form_error('ATRIBUTO name DE LA ETIQUETA <input>') */

			/**ERRORES EN LA INFORMACION INGRESADA
			 * SI ESTA VACIO O SI NO CUMPLE CON LO ESPECIFICADO
			 */


			/**error campo rut */
			
        		'formularioSociodemografico_rut' 
				=> form_error('formularioSociodemografico_rut'),

			/**error campo nombre */
        		'formularioSociodemografico_nombres' 
				=> form_error('formularioSociodemografico_nombres'),

			/**error campo apellidos */
        		'formularioSociodemografico_apellidos' 
				=> form_error('formularioSociodemografico_apellidos'),
				

			/**error campo nacionalidad */
        		'formularioSociodemografico_nacionalidad'  
				=>  form_error('formularioSociodemografico_nacionalidad'),
			
			/**error campo edad */
        		'formularioSociodemografico_edad'  
				=>  form_error('formularioSociodemografico_edad'),
			
			/**error campo genero */
        		'formularioSociodemografico_genero'  
				=>  form_error('formularioSociodemografico_genero'),
			
			/**error campo carreraActual */
        		'formularioSociodemografico_carreraActual'  
				=>  form_error('formularioSociodemografico_carreraActual'),

			
			/**error campo carreraPrimeraOpcion */
        		'formularioSociodemografico_carreraPrimeraOpcionSiNo'  
				=>  form_error('formularioSociodemografico_carreraPrimeraOpcionSiNo'),

			/**error campo convivencia */
        		'formularioSociodemografico_convivencia'  
				=>  form_error('formularioSociodemografico_convivencia'),

			/**error campo tiempoDeTraslado */
        		'formularioSociodemografico_tiempoDeTraslado'  
				=>  form_error('formularioSociodemografico_tiempoDeTraslado'),
        	
			/**error campo carreraDePrecedencia */
				'formularioSociodemografico_carreraDePrecedenciaSiNo'  
				=>  form_error('formularioSociodemografico_carreraDePrecedenciaSiNo'),

			/**error campo razonParaElegirLaCarreraActual */
				'formularioSociodemografico_razonParaElegirLaCarreraActual'  
				=>  form_error('formularioSociodemografico_razonParaElegirLaCarreraActual'),

        		'formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose'  
				=>  form_error('formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose'),

        		'formularioSociodemografico_beneficioGratuidadSiNo'  
				=>  form_error('formularioSociodemografico_beneficioGratuidadSiNo'),
        
      		);
/**validar input radio ingresados  */

		/**validar input radio  */
		if($this->input->post('formularioSociodemografico_carreraPrimeraOpcionSiNo')==='No'){
			
			
			$erroresDeValidacion+=['formularioSociodemografico_carreraPrimeraOpcion' 
			=> form_error('formularioSociodemografico_carreraPrimeraOpcion')];
		}


		/**validar presiono Si en el input radio
		 *  sobre su carrera de precedencia */
		if($this->input->post('formularioSociodemografico_carreraDePrecedenciaSiNo')==='Si'){
				
			
			$erroresDeValidacion+=['formularioSociodemografico_carreraDePrecedenciaIngresar' 
			=> form_error('formularioSociodemografico_carreraDePrecedenciaIngresar')];
		}

		/**validar  otroMotivo*/
		if($this->input->post('formularioSociodemografico_razonParaElegirLaCarreraActual')==='otroMotivo'){
				
			
			$erroresDeValidacion+=['formularioSociodemografico_razonParaElegirLaCarreraActualIngresarMotivo' 
			=> form_error('formularioSociodemografico_razonParaElegirLaCarreraActualIngresarMotivo')];
		}

		/**validar si presiono Si en el input radio sobre su carrera de precedencia */
		/** */
		if($this->input->post('formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose')==='Si'){
			
			$erroresDeValidacion+=['formularioSociodemografico_nombreDeCondicionMentalDiagnosticada' 
			=> form_error('formularioSociodemografico_nombreDeCondicionMentalDiagnosticada')];
		}

		/*$rut=$this->input->post('rut');
		if( preg_match( '/^[0-9]+-[0-9kK]{1}$/' , $rut ) ){*/
			/**rut ingresado exitosamente */
	/*		echo "rutExito";
			echo gettype( $rut );
			echo strlen( $rut );
			echo strtolower($rut);
		}*/


			//var_dump($erroresDeValidacion);
      		
			echo json_encode( $erroresDeValidacion );
			

		
		}else{
			/** caso en el que no hay errores de validacion
			 * se ingresa a la base de datos
			 */
			/*
			$formSocio_rut=$this->input->post('formularioSociodemografico_rut');
			$formSocio_nombres=$this->input->post('formularioSociodemografico_nombres');
			$formSocio_apellidos=$this->input->post('formularioSociodemografico_apellidos');
			$formSocio_nacionalidad=$this->input->post('formularioSociodemografico_nacionalidad');
			$formSocio_edad=$this->input->post('formularioSociodemografico_edad');
			$formSocio_genero=$this->input->post('formularioSociodemografico_genero');
			$formSocio_carreraActual=$this->input->post('formularioSociodemografico_carreraActual');
			$formSocio_carreraPrimeraOpcionSiNo=$this->input->post('formularioSociodemografico_carreraPrimeraOpcionSiNo');
			$formSocio_carreraPrimeraOpcion=$this->input->post('formularioSociodemografico_carreraPrimeraOpcion');
			$formSocio_convivencia=$this->input->post('formularioSociodemografico_convivencia');
			$formSocio_tiempoDeTraslado=$this->input->post('formularioSociodemografico_tiempoDeTraslado');
			$formSocio_carreraDePrecedenciaSiNo=$this->input->post('formularioSociodemografico_carreraDePrecedenciaSiNo');
			$formSocio_carreraDePrecedenciaIngresar=$this->input->post('formularioSociodemografico_carreraDePrecedenciaIngresar');
			$formSocio_razonParaElegirLaCarreraActual=$this->input->post('formularioSociodemografico_razonParaElegirLaCarreraActual');
			$formSocio_razonParaElegirLaCarreraActualIngresarMotivo=$this->input->post('formularioSociodemografico_razonParaElegirLaCarreraActualIngresarMotivo');
			$formSocio_condicionMentalDiagnosticadaSiNoNose=$this->input->post('formularioSociodemografico_condicionMentalDiagnosticadaSiNoNose');
			$formSocio_nombreDeCondicionMentalDiagnosticada=$this->input->post('formularioSociodemografico_nombreDeCondicionMentalDiagnosticada');
			$formSocio_beneficioGratuidadSiNo=$this->input->post('formularioSociodemografico_beneficioGratuidadSiNo');
*/
			$var=1;
			echo json_encode($var);

		}
		
	}



}
