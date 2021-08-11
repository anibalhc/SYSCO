<?php
  session_start();

  include('conexion/conn.php');
  $user = $_POST['username'];
  $pass = $_POST['password'];


  $sql = sprintf("SELECT * FROM usuarios WHERE usuario='$user' AND contra = '$pass'");
  $resultado = $conn->query($sql);
  
 
  if($resultado-> num_rows >0){

    $_SESSION['admin'] = $user;
    
    header("Location: modulo_inicio/"); 

  }else{

  //header("Location: index.html"); 
  echo "<script>alert('Datos incorrectos');</script>";

  }

  $conn->close();

?>