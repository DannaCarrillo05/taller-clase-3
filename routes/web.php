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
});
