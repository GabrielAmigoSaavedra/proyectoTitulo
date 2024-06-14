<?php

function crearValoresDeConsultaDeInsercion($respuestas,$cantidadDePreguntas){
    $textoColumnas="resPregunta";
    $textoValores="";
    $texto="";
    $coma=",";
//resPregunta1
    //INSERT INTO `usuarios`(`nombre_usuario`) VALUES ('$nombreUsuario')

    $indice=1;
    foreach($respuestas as $respuesta){
/**se crea la cadena de texto para las columnas en las que se insertarán las respuestas  
 * 
 * INSERT INTO `usuarios`(`nombre_usuario`) VALUES ('$nombreUsuario')
 */
            if($indice==$cantidadDePreguntas){
                $coma="";
            }
        
            $texto=$texto.$textoColumnas.$indice.$coma;

            $textoValores=$textoValores.$respuesta.$coma;
        
            $indice++;
        }
        return "INSERT INTO respuestasdeencuestamslq(".$texto.") VALUES (".$textoValores.");";
}
?>