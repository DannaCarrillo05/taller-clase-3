<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "*****VARIBALE SY TIPOS DE VARIABLES***** <br><br>";
    $name="Danna"; //string
    $age=20; //integer
    $height=1.60; //float
    $isStudent=true; //boolean
    $fruits=["manzana","pera","uva"]; //array

    echo "Mi nombre es: $name, tengo $age años, mido $height metros, es $isStudent que soy estudiante y mis frutas favoritas son: ";
    foreach($fruits as $fruit){
        echo "$fruit ";
    }
    echo "<br><br>";

    echo "*****ESTRUCTURAS DE CONTROL***** <br><br>";
    if($age>=18){
        echo "Eres mayor de edad.<br>";
    }else if($age==18){
        echo "Tienes 18 años.<br>";
    }else{
        echo "Eres menor de edad.<br>";
    }

    echo "<br>*****FUNCIONES***** <br><br>";
    function greet($name){
        return "Hola, $name!<br>";
    }
    echo greet("Danna");
    


});
