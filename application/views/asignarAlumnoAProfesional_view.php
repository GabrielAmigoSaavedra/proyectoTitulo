
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
        <h1>asignarAlumnoAProfesional</h1>

      <p class="h3">Nombre de Profesional:</p>
      <p class="h3">Profesión:</p>
      <p class="h3">Correo electrónico:</p>

      <br>
      <br>
      <br>
      <br>
      <p class="h3">Lista de Alumnos Asignados:</p>


<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>   
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        
    </table>

    <button>Guardar</button>
    <button>cancelar</button>

    </div>
<script src="<?= base_url('assets/jquery-3.7.1.slim.min.js')?>"></script>

<script src="<?= base_url('assets/datatables.min.css')?>"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/datatables.min.js')?>"></script>
<script>
	
new DataTable('#example', {
    ajax: '<?=base_url('assets/exampleDataTable.json')?>',
    language: {
        processing:     "Procesando datos...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ alumnos",
        info:           "Mostrando p&aacute;gina _START_ de _END_ paginas, _TOTAL_ elementos",
        infoEmpty:      "Mostrando p&aacute;gina 0 de 0 paginas, 0 elementos",
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

</script>
</body>
</html>

