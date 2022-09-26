<?php
    //Sumar dos números escritos en el url
    //Versión 2: Ahora está en negrita

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $a + $b;

    if(isset($a) && isset($b))
    {
        echo "<h1>Calculadora para sumar dos números</h1>";
        echo "$a + $b = <strong>$c</strong>";
    }
    else
    {
        echo "Error es la escritura de un número";
    }
?>