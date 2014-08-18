<?php

require 'flight/flight.php';

//Callback Básico
Flight::route('/', array('hola_mundo', 'saludar'));

//Callback a a una función
function hola_mundo()
{
    echo 'Hola mundo desde una función';
}

//Callback al método de una clase
class hola_mundo
{
    public function saludar(){
     
        echo 'Hola mundo desde una clase';
    }
}





Flight::start();