
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="<?= base_url('assets/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Encuesta de Estrategias Motivacionales y de Aprendizaje</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			
			<div class="col-md-4">
				<div class="card" style="margin-top: 30px">
					<div class="card-header text-center">
						Ingresar
					</div>
					  
            		<div class="card-body">
						<form id="formulario_login" method="post" autocomplete="off" action="<?=base_url('validarInicioDeSesion')?>">
						
						<div	class="mb-3 form-group" 
								id="form_group_rut" >

						    <label for="login_rut" class="form-label">RUT</label>
						    <input type="text"  placeholder="Ingresar RUT" name="login_rut" class="form-control" id="login_rut" >

                			<div class="invalid-feedback"></div>
						</div>
						
						<div class="mb-3 form-group" id="form_group_contrasena">
						    <label for="login_contrasena" class="form-label">Contraseña</label>
						    <input type="password" name="login_contrasena"  placeholder="Ingresar contraseña"  class="form-control" id="login_contrasena">
							
							<div class="invalid-feedback"></div>
						</div>

						<div class="text-center form-group">
						    <button type="botonSubmitLogin" class="btn btn-primary">Ingresar</button>
  						</div>

						</form>

						<div class="form-group" id="mensajeDeAlerta">

						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-4"></div>
		</div>
	</div>
	
	<script src="<?= base_url('assets/jquery-3.7.1.min.js');?>"></script>
	
	<script src="<?= base_url('assets/bootstrap.bundle.min.js');?>"></script>
	
	<script src="<?= base_url('assets/autenticar/login.js');?>"></script>
	
	<script src="<?= base_url('assets/cleave.min.js');?>"></script>
	<script>
//new Cleave("#login_rut",{delimiters:[".",".","-"],blocks:[2,3,3,1],uppercase:!0});
	</script>

</body>

</html>