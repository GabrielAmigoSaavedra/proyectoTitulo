<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CuestionarioMSLQ_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->helper(array('autenticaciones/reglasDeFormularioMSLQ'));
		
		$this->load->model('CuestionarioMSLQ_model');

	}

	public function index(){

        $consulta=$this->CuestionarioMSLQ_model->getPreguntas();

		$data['preguntas'] = $consulta;
		
		
		$this->load->view('cuestionarioMSLQ_view', $data);

		
	}
	public function validarMSLQ(){
		/**consulta para saber la cantidad de preguntas */

		$consulta=$this->CuestionarioMSLQ_model->getCantidadTotalDePreguntas();
		$resultadoDeConsulta=$consulta->row();
        $cantidadDePreguntas=$resultadoDeConsulta->cantidadDePreguntas;

		/**fin de la consulta para saber la cantidad de preguntas */



		$reglasDeValidacion=getReglasDeCuestionarioMSLQ( $cantidadDePreguntas );

/**asignar reglas de validacion del cuestionario */
		$this->form_validation->set_rules($reglasDeValidacion);
		
		if(	 $this->form_validation->run() === FALSE){
		/**si el formulario envia errores */
			$erroresDeValidacion=array();
			
			for($indice=1;$indice<=$cantidadDePreguntas;$indice++){
	
				$valorPregunta="pregunta_".$indice;
			
				$erroresDeValidacion += [ $valorPregunta => form_error($valorPregunta) ];


			}

			echo json_encode( $erroresDeValidacion );

		}else{
			/**caso en que todas las preguntas fueron respondidas correctamente
			 * 
			 *	el formulario se envia correctamente */
			$preguntasCuestionario=array();
	
			for($indice=1;$indice<=$cantidadDePreguntas;$indice++){
	
				$valorPregunta="pregunta_".$indice;

				$respuesta=$this->input->post($valorPregunta);


				$preguntasCuestionario +=[ $valorPregunta => $respuesta ];
				/*
				for($indice=1;$indice<=$cantidadDePreguntas;$indice++){
					//echo $preguntasCuestionario[$indice];
				}**/
			}
			
			$preguntasCuestionario=$this->CuestionarioMSLQ_model->insertarRespuestasDelCuestionario( $preguntasCuestionario , $cantidadDePreguntas );
			
			echo json_encode( $preguntasCuestionario );
		}
		

	} 
	public function calcularDimensionesDelCuestionario(){
		/**d1 2-6-8-9-11-13-16-18-19 */
		/**d2 1-4-5-7-10-14-15-17-21 */
		/**d3 3-12-20-22 */
		/**d4 23-24-26-28-29-30-31-34-36-39-41-42-44*/
		/**d5 25 27-32-33-35-37-38-40-43 */

			//echo json_encode( $preguntasCuestionario );

	}
	public function cantidadPreguntas(){
        $consulta=$this->CuestionarioMSLQ_model->getCantidadTotalDePreguntas();
        $cantidadDePreguntas=$consulta->row()->cantidadDePreguntas;
    }

}
