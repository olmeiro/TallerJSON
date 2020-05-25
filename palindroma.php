<?php
date_default_timezone_set("UTC");
// echo "UTC:".time();
// echo "<br>";

$palabra = $_POST["palabra"];
echo "palabra: " .$palabra;
echo "<br>";

$cantLetras = strlen($palabra);
echo "cantidad de letras: " . $cantLetras;
echo "<br>";

$mayus = strtoupper($palabra);
echo "en mayuscula: " . $mayus;
echo "<br>";

echo "Fecha: " . date('Y-m-d');
echo "<br>";

//reemplazar vocales por x:

$cadena3 = $palabra;
$cadena4 = "";

$cadena4 = str_replace("a","x",$palabra);
$cadena4 = str_replace("e","x",$cadena4);
$cadena4 = str_replace("i","x",$cadena4);
$cadena4 = str_replace("o","x",$cadena4);
$cadena4 = str_replace("u","x",$cadena4);
echo "nueva palabra: " . $cadena4;
echo "<br>";

function contarVocales($cadena)
{
  $vocalesEncontradas = 0;

  //se convierte la cadena a minusculas:
  $cadena = strtolower($cadena);

  //se recorre la cadena desde 0 hasta su longitud -1
  //se pone la longitud dentro una varialble para evitar multiples llamadas
  //a strlen() en cada iteracción:

  $longitud = strlen($cadena);

  for ($indice = 0; $indice < $longitud; $indice++)
  {
    if (in_array($cadena[$indice], ["a","e","i","o","u"]))
    {
      $vocalesEncontradas++;
    }
  }
  return $vocalesEncontradas;
}

$cantVocales = contarVocales($palabra);
echo "numero vocales es: " . $cantVocales;
echo "<br>";
//palindromas:

$fraseInvertida = strrev($palabra);

if ( $palabra == $fraseInvertida)
{
    echo "la palabra es palindromo.";
}
else{
    echo "la palabra no es palindroma";
}

?>