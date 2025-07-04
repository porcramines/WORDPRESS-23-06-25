<?php
//variables dinamicas o valor variables

echo  "ingresa la nota1:\n";
$nota1 = trim(fgets(STDIN)); //lectura de variables por teclado 

echo  "ingresa la nota2:\n";
$nota2 = trim(fgets(STDIN)); //lectura de variables por teclado 
echo  "EL PROMEDIO ES :\n";
$suma=($nota1+$nota2)/2;

echo  "\nLa Suma es:" .$suma; //impresion de dato

?>