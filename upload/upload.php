<?php



if (isset($_FILES['archivo'])){
  $errores = array();
  $temporal =  $_FILES['archivo']['tmp_name'];
  $nombre_archivo = $_FILES['archivo']['name'];
  $tamaño_archivo = $_FILES['archivo']['size'];
  $type_archivo = $_FILES['archivo']['type'];
  $error_archivo = $_FILES['archivo']['error'];
  $bandera = explode('.', $nombre_archivo);
  $archivo_extension =  strtolower(end($bandera));
  $extenciones = array("jpeg", "jpg", "png");

  if(in_array($archivo_extension, $extenciones) === false){
    $errores[] = "Extencion no permitida";
    print_r($errores);
  }
  if($tamaño_archivo > 2097152){
    $errores[] = "El tamaño maximo permitido es de 20000";
  }
  if (empty($errores)){
    move_uploaded_file($temporal, "imagenes/".rand(0,11). $nombre_archivo);
  }
  if(count($_FILES['archivo'])<= 3){
    echo "necesita 3";
  }
  else{
    echo "correcto";
  }
}else{
  echo "no envio archivo";
}



