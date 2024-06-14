<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/bootstrap.min.css')?>"
      rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container">

    <h1>Cuestionario de Motivacion y Estrategias de estudio</h1>
    <h1>En esta sección deberá responder todas las preguntas eligiendo la opción que esté más acertada. Los valores vas de 1 (Totalmente en desacuerdo) y 7 (Totalmente de acuerdo) </h1>

<br />
<hr />

<form	id="cuestionario_MSLQ"
		method="post" 
		autocomplete="off" 
		action="<?=base_url('validarCuestionarioMSLQ')?>">


<?php 
    $indicePregunta=1; 
    $indicePreguntaRadio=1; 
    
    foreach($preguntas as $pregunta):// busca las preguntas
?> 

<section class="row">
    <div class="col-md-12">
        <section class="row">
            <div class="col-md-7">
                <p id="preguntaCuestionario_<?= $indicePregunta ?>"
					class="h5">
                    <?= $indicePregunta ?>.- <?= $pregunta ?> 
                </p>
				<div class="invalid-feedback">
<p>abcc</p>

</div>
            </div>

            <div	class="col-md-5 form-group"
					id="form_group_<?=$indicePregunta?>">
            <!--opciones 1 a 7 Likert-->

            <?php $indiceLikert=1;while($indiceLikert<=7):?>
                <div class="form-check form-check-inline">

                    <?php $identificarPregunta = "pregunta_".$indicePregunta;
                    $identificarRadio = $identificarPregunta."_radio_".$indiceLikert;?>
					
                    <input  class=" h5 form-check-input "
                                type="radio" 
								name="<?= $identificarPregunta ?>"
                                id="<?=$identificarRadio?>" 
                                value="<?=$indiceLikert?>"
                                >
                    <label  class=" h5 form-check-label "
                            for="<?=$identificarRadio?>">
                            
                            <?=$indiceLikert?>
                    </label>
                </div>

            <?php 
				$indiceLikert++;
				$indicePreguntaRadio++; 
				endwhile; 
			?>

            </div>


        </section>
    </div>
</section>

<br >
<hr >
<?php  $indicePregunta++; endforeach; ?>

<!--BOTON ENVIAR FORMULARIO-->
<section class="row">
    <div class="col-md-9  aling-items-right  ">
        <button type="submit" class="btn btn-primary">Enviar formulario</button>
    </div>
</section>

</form>



</div>
	<script src="<?= base_url('assets/jquery-3.7.1.min.js');?>"></script>
	
	<script src="<?= base_url('assets/bootstrap.bundle.min.js');?>"></script>

	<script>


$("#cuestionario_MSLQ").submit(function (ev) {


	//$("#mensajeDeAlerta").html("");
	
	$.ajax({
		url: " <?= base_url('validarCuestionarioMSLQ');?>",
		type: "post",

		data: $(this).serialize(),
		success: function (err) {
			var json = JSON.parse(err);
			console.log(json);
			//alert(json.url);
			//window.location.replace(json.url);
		},
		
	});
	ev.preventDefault();
});

    </script>
</body>
</html>
