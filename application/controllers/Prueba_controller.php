

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba_controller extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('autenticaciones/reglasDePrueba'));

	}

	public function index()
	{

		$this->load->view('prueba_view');
	}
	public function validarPrueba()
    {
        $reglasDeValidacionPrueba	=	getReglasDePrueba();


		$this->form_validation->set_rules($reglasDeValidacionPrueba);

		//si en el formulario login no se ingresan los datos requeridos lanza los mensajes de error
		if(	 $this->form_validation->run() === FALSE){

			//recarga la pagina con los errores a la vista
			
			//en caso de que los campos esten vacios lanza los errores de 
			
			$this->output->set_status_header( 400 );
			
			$erroresDeValidacion = array(
				
				//error de input rut
				'msjErrorInputRadio' => form_error('inputRadioPruebaName'),
				'msjErrorInputTextAAA' => form_error('inputTextPruebaName'),

			);
            
            /**si
             * no debe haber texto a ingresar en el input
             */
            if( $this->input->post('inputRadioPruebaName') === 'si' ){
                $mensajeRecibido = $this->input->post('inputTextPruebaName');

                $erroresDeValidacion += ['1ErrorInputTextRecibido'=> $mensajeRecibido];

                $erroresDeValidacion += ['msjErrorInputText'=>'abcSI'];
                $mensajeRecibido='qwerty';
                $erroresDeValidacion += ['2ErrorInputTextModificado'=> $mensajeRecibido];
                
                
            }
            /**no
             * hay input text
             * se debe ingresar texto en el input
             */

            if( $this->input->post('inputRadioPruebaName') === 'no' ){
                if( $this->input->post('inputTextPruebaName') === '' ){
                    $erroresDeValidacion += ['msjErrorInputText'=>'abc'];
                }
            }
            
            
            

			echo json_encode( $erroresDeValidacion );

		}else{


        }

    }




}
