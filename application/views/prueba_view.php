<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>prueba_view</h1>
    
    <form id="formulario_login" method="post"  action="<?=base_url('validarPrueba')?>">

        <label for="inputRadioPrueba1">
            <input type="radio" id="inputRadioPrueba1" name="inputRadioPruebaName" value="si" onclick="desactivarTexto()">SI_inputRadioPrueba
        </label>
        
        <label for="inputRadioPrueba2">
            <input type="radio" id="inputRadioPrueba2" name="inputRadioPruebaName" value="no" onclick="activarTexto()">NO_inputRadioPrueba
        </label>

        <label for="inputRadioPrueba5">
            <input type="radio" id="inputRadioPrueba5" name="inputRadioPruebaName" value="ns" onclick="desactivarTexto()">NOSE_inputRadioPrueba
        </label>
        
        <label for="inputRadioPrueba4">
            <input type="radio" id="inputRadioPrueba4" name="inputRadioPruebaNameX" value="nel">NO_inputRadioPrueba2
        </label>

        <br>
        <br>

        <div id="disablePrueba">
                <label for="inputRadioPrueba3" >  abcdf      </label>
                <input type="text" id="inputRadioPrueba3" name="inputTextPruebaName" >
        </div>
        
<br><br>

        <button type="submit" > enviar prueba    </button>


    </form>
</body>
	<script src="<?= base_url('assets/jquery-3.7.1.min.js');?>"></script>
	
	<script src="<?= base_url('assets/bootstrap.bundle.min.js');?>"></script>


    <script>
        $(document).ready(function(){
            $("#inputRadioPrueba1").click(function(){
                console.log("lalala");
                
                //$("#disablePrueba > input").attr("disabled");
            });
        });
		function activarTexto(){ 
            document.getElementById("inputRadioPrueba3").disabled=false;
         }
         
         function desactivarTexto() { 
            document.getElementById("inputRadioPrueba3").disabled=true;
         }
					
					
				
    </script>
<script>
    $("#formulario_login").submit(function (ev) {


	$("#mensajeDeAlerta").html("");
	
	$.ajax({
		url: "<?=base_url("Prueba_controller/validarPrueba")?>",
		type: "post",

		data: $(this).serialize(),
		success: function (err) {
			var json = JSON.parse(err);
			console.log(json);
			alert(json.url);
			window.location.replace(json.url);
		},
		statusCode: {

			401: function (xhr) {
				var json = JSON.parse(xhr.responseText);

				console.log(json);

				$("#mensajeDeAlerta").html(
					'<div class="alert alert-warning">' +
						json.mensajeDeCredeciales +
						"</div>"
				);
			},
		},
	});
	ev.preventDefault();
});

</script>
</html>