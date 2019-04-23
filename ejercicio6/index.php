<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */

function palabra($var){
 
        $conlet = strlen($var);
        $vocales = substr_count($var, 'a')+substr_count($var, 'e')+
                      substr_count($var, 'i')+substr_count($var, 'o')+
                      substr_count($var, 'u')+substr_count($var, 'A')+
                      substr_count($var, 'E')+substr_count($var, 'I')+
                      substr_count($var, 'O')+substr_count($var, 'U');

        $a = substr_count($var, 'a'); 
        $e = substr_count($var, 'e') ;
        $i = substr_count($var, 'i'); 
        $o = substr_count($var, 'o'); 
        $u = substr_count($var, 'u'); 
        echo "la palabra $var tiene un total de: $conlet letras";
        echo ('<br>');
        echo "Total vocales a: $a <br/>";
        echo "Total vocales e: $e <br/>";
        echo "Total vocales i: $i <br/>";
        echo "Total vocales o: $o <br/>";
        echo "Total vocales u: $u <br/>";
        echo ('<br>');
        echo "El total de vocales de  la palabra $var son: $vocales";
	}
	
	$var = 'aceituno';
	echo palabra($var);
?>