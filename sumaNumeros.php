<?php
    //Sumar dos números escritos en el url
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $a + $b;

    if(isset($a) && isset($b))
    {
        echo "$a + $b = $c";
    }
    else
    {
        echo "Error es la escritura de un número";
    }
?>