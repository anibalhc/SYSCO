<?php

include('config.php');

$conn = mysqli_connect($host,$user, $pss);


//mysqli_query($conn,"SET NAMES 'latin5'");



$bd = mysqli_select_db($conn, $bd ) or die ( "Error al conectarse a la BD" );
//mysql_query("SET NAMES 'utf8'", $conn);


//mysqli_set_charset($conn, 'utf8');
#mysqli_close($conn);


?>



