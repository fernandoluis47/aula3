<?php

#Funções matemáticas

echo "VAlor de pi: ".(pi()); //retorna valor de pi 3.14

echo "<hr>"; //linha separadora

echo "menor valor entre os valores (0,34,56,-3,58): ".(min(0,34,56,-3,58)); // retorna o menor valor
echo "<br>";
echo "maior valor entre os valores (0,34,56,-3,58): ".(max(0,34,56,-3,58)); // retorna o maior valor

echo "<hr>";

echo "Valor absoluto: -7.3: ".(abs(-7.3));

echo "<hr>";

$numero = rand(0,10);
echo "VAlor aleatório: {$numero} "; //0,10 indica de onde começa até o número total