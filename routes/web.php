<?php

use Illuminate\Support\Facades\Route;

Route::get('/contacto', function () {
    return view('formulario');
});

Route::get('/contacto/store', function () {
    print_r($_GET);
    echo "<br>Formulario enviado correctamente.";
})->name('contacto.store');

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

    echo "<br>*****ARREGLOS y MAPAS***** <br><br>";
    $person=["name"=>"Danna","age"=>20,"height"=>1.60];
    echo "Nombre: ".$person["name"]."<br>";
    echo "Edad: ".$person["age"]."<br>";
    echo "Estatura: ".$person["height"]."<br>"; 


    echo "<br>*****BUCLES***** <br><br>";
    echo "Bucle for:<br>";
    for($i=1; $i<=5; $i++){
        echo "Número: $i<br>";
    }
    echo "<br>Bucle while:<br>";
    $j=1;
    while($j<=5){
        echo "Número: $j<br>";
        $j++;
    }
    echo "<br>Bucle foreach:<br>";
    foreach($fruits as $fruit){
        echo "Fruta: $fruit<br>";
    }
    


});
