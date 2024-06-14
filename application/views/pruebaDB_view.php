<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
<?php
$texto = "19.152.977-k";
echo "<br><br>";

$texto2=preg_replace('([^A-Za-z0-9 ])', '', $texto);

echo  $texto;
echo "<br><br>";

echo  $texto2;
echo "<br><br>";

echo  strlen($texto2);
 
echo "<br><br>rut:";

 echo substr($texto2, 5, 4);


// Salida: marcosalonso@emailinventado.net


?>
<br>
    <?php
// Print the array from getdate()
print_r(getdate());
echo "<br><br>";

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
echo "<br><br>";

echo "$mydate[wday]/$mydate[mon]/$mydate[year]--$mydate[hours]:$mydate[minutes]:$mydate[seconds]";
echo "<br><br>";
?>
    <h1>pruebaDB_view</h1>
    <?php date_default_timezone_set("America/Santiago");
    echo gettype(date("h:m:s"))?>
    <?php //echo base_url("PruebaDB_controller/pruebaDB_JSON")?>



<form id="formPrueba" 
action="<?=base_url("PruebaDB_controller/validarCheckBox")?>" 
method="post">

<div id="form-group">



<div class="form-check">
  <input    class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault1"
            value="s">

  <label    class="form-check-label"
            for="flexRadioDefault1">
    SI
  </label>

</div>


<div class="form-check">
  <input    class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault2"
            value="n 1">

  <label    class="form-check-label"
            for="flexRadioDefault2">
    NO
  </label>
</div>

</div>

<input type="submit">
</form>
  <?php
  $a=1;
$b="1"
  
  ?>
<?php// echo gettype($a);echo gettype($b);?>


<?php 
$arr=array("pregunta1"=>"a","pregunta2"=>"b","pregunta3"=>"c");

    $textoColumnas="resPregunta";
    //$textoValores="";

$texto="";
$coma=",";
$abc=1;
foreach ($arr as $valor) {
  # code...
  echo md5($valor);

  echo "<br>";
  if($abc==3){
    $coma="";
  }
  $texto=$texto.$textoColumnas.$abc.$coma;

 $abc++;
}
 echo strtoupper($texto);
$xd= 1.8888."avc";
 echo floatval($xd);
$a="1";
echo "<br>";

 echo $a+$a;
echo "<br>";

echo $abc;
echo "<br>";
 echo md5($abc);
?>



	<script src="<?= base_url('assets/jquery-3.7.1.min.js');?>"></script>

<script>

    $("#formPrueba").submit(function (ev) {

	$.ajax({
		url: "<?= base_url('PruebaDB_controller/validarCheckBox');?>",
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
<script>
console.log(<?php echo json_encode($arr);?>);

</script>

</body>


  

</html>