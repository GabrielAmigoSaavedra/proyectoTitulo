

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">
      <link href="<?= base_url('assets/datatables.min.css')?>"
      
      rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>admin_controller</h1>
	<a href="<?=base_url('login_controller/logout')?>">cerrar sesion</a>

      <p class="h3">Nombre de admin:</p>
      <p class="h3">Correo electrónico:</p>


      <p class="h3">Lista de usuarios:</p>


<table id="ejemplo" class="display" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre usuario</th>
            <th>acciones</th>
        </tr>
    </thead>

</table>

      
    </div>
<script src="<?= base_url('assets/jquery-3.7.1.min.js')?>"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/datatables.min.js')?>"></script>
<script>
	



$(document).ready(function(){
     $('#ejemplo').DataTable({
        
        ajax:{
		    url: "<?= base_url("Administrador_controller/mostrarUsuarios");?>",
            type:"POST"
        },
        
        "columns":[
            {"data":"id"},
            {"data":"nombreUsuarios"},
            {"data":"accion"},
        ],
		language: {
        processing:     "Procesando datos...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ alumnos",
        info:           "Mostrando p&aacute;gina _START_ de _END_ paginas, _TOTAL_ elementos",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "&Uacute;ltimo"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
     });
        
        });
</script>
</body>
</html>

