<?php


// $exp = "/PRUEBA/i";
// $exp = "/[0-9]/";
// $exp = "/^texto/i";
// $exp = "/pr[ueo]eba/i";                                                      d minuscula es para numero
// $exp = "/grupo-[0-9]-adso/";                                                 D mayuscula es para letras
// $exp = "/l[aeiou]{2,4}r/";
// $exp = "/[0-9]/";
// $exp = "/[A-Za-z]/";
// $exp = "/[\d]/";

// $resultado = preg_match_all($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE);
// $exp = "/[\D]/";
$texto = "Ab2Cd1";
// $exp = "/[A-Z]{4,}/";
// $exp = "/([A-Z]{4,}).([0-9]{2,})/";
// $exp = "/(?=.*[A-Z]){4,]}(?=.*[a-z])(?=.*\d)/";
$exp = "/(?=.*([A-Z]){2})(?=.*([a-z]){2}).(?=.*(\d){2})/";
$resultado = preg_match_all($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE);

echo "<pre>";
print_r($coincidencias);
echo "</pre>";
// echo "<br>";

if ($resultado){
echo "si cumple";
}else{
  echo "no cumple";
}
