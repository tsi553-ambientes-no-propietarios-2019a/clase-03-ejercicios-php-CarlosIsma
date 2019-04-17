<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/

function mostrartitulo($txt)
{
  echo "<h1 style=\"text-align:center\">";
  echo $txt;
  echo "</h1>";
}

mostrartitulo("Primer titulo");
echo "<br>";
mostrartitulo("Segundo Titulo");

?>