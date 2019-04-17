<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
$tabla=1;

while ($tabla <= 10) {
	$multi=$tabla*2;
	echo "2 * $tabla = $multi <br>";
	$tabla++;
}


echo "<br>";


for ($n=1; $n<=10; $n++){
	echo "<br>$n"." * "." 2 "." = ".$n*2;
}



echo "<br>";



$tabla = 1;

echo "<br>";

do
{
	echo " 2 "." * ".$tabla." = ".$tabla*2 ."<br>";
	$tabla++;
}
while($tabla <= 10)

?>