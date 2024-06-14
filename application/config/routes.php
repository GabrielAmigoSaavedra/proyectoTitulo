<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




/**administrador_view */
$route['admin'] = 'Administrador_controller';

$route['validarInicioDeSesion'] = 'Login_controller/validarLogin';
/**cerrar sesion */
$route['logout'] = 'Login_controller/logout';
/**formulario del alumno */
$route['formulario'] = 'FormularioSociodemografico_controller';
$route['formularioRespuesta'] = 'FormularioSociodemografico_controller/validarFormularioSociodemografico';

$route['cuestionario'] = 'CuestionarioMSLQ_controller';

$route['validarCuestionarioMSLQ'] = 'CuestionarioMSLQ_controller/validarMSLQ';




