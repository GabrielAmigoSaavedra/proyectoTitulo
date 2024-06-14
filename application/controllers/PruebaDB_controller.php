<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaDB_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	$this->load->helper(array('autenticaciones/reglasDePrueba'));
		$this->load->library('form_validation');
	

		$this->load->model('PruebaDB_model');


		$this->load->model('CuestionarioMSLQ_model');

		
	}

	public function index(){
    
		$this->load->view('pruebaDB_view');
    }
	public function pruebaDB_JSON(){
        $consulta=$this->PruebaDB_model->getTodo();
        /*$abc=$consulta->row();

echo $abc->nombre_usuario;
echo "<br>";
echo json_encode($consulta->result());
*/
        $i=0;
        foreach ($consulta->result() as $fila){
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
	public function otraPrueba(){
        date_default_timezone_set("America/Santiago");
        date("h:m:s");
        echo $this->PruebaDB_model->agregar(date("h:m:s"));

    }
    public function pruebaPreguntas(){
        $consulta=$this->CuestionarioMSLQ_model->getPreguntas();
        $i=0;
        foreach ($consulta->result() as $fila){
            $abc[]=array(
                'id'=> $i,
                'pregunta_'.$i =>$fila);
            $i++;
        }
        echo json_encode($abc);

    }
    public function cantidadPreguntas(){

        $consulta=$this->CuestionarioMSLQ_model->getCantidadTotalDePreguntas();
        return $consulta->row()->cantidadDePreguntas;
    }


    public function validarCheckBox(){

            $reglasDeValidacion = getReglasDePrueba();
		    
            $this->form_validation->set_rules($reglasDeValidacion);


        if( $this->form_validation->run() === FALSE ){
            /**reglas de validacion */



            //echo form_error('flexRadioDefault');

            $erroresDeValidacion = array(
				
				//error de input checkbox
				'check' => form_error('flexRadioDefault'),
				
			);

			echo json_encode( $erroresDeValidacion );

        }
        
    }



}
