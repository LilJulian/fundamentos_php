<?php

$num = 1;
$contador = 0;

function tabla($num, $contador){
  while ($contador < 10){
    $multi = $num * $contador;
    echo "$num x $contador = $multi <br>";
    $contador++;

  }
}

echo tabla($num, $contador);


function palabras($palabra){
  if (strlen($palabra) <= 5) {
    return "Palabra corta";
  }else{
    return "Palabra larga";
  }
}

$respuesta = palabras("becer");

echo $respuesta;
// echo strlen($palabra);

/**Escriba un string y que devuelva el string sin las vocales */