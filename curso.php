<?php
//declarar

$Nombre="";
$Maestra="";

if(isset($_POST['Ingresar'])){

$Nombre= $_POST['Nombre'];
$Maestra= $_POST['Maestra'];


if(isset($_POST['Grado'])){  //si se selecciona un boton de radio
   $Grado= $_POST['Grado'];}
    
    else{

   	$Grado=""; } //tomara ese valor

if (empty($Grado)) {
	echo"<p class='error'> *Selecciona un Grado. </p>";

}
if($Grado=='1'){
include('grado1.html');
}

if($Grado=='2'){
include('grado2.html');
}

if($Grado=='3'){
include('grado3.html');
}

if($Grado=='4'){
include('grado4.html');
}

if($Grado=='5'){
include('grado5.html');
}

if($Grado=='6'){
include('grado6.html');
}
}






?>