<?php

class User{
    // public - Son aquellos que pueden ser accedidos a lo largo de todo el sistema
    // protected - Solo se pueden acceder a los elementos de la clase, aquellas clases que hereden de esta clase.
    // private - Nadie puede hacer uso de este sistema, ni los elementos hijos que hereden de esta clase.

    public const PAGINATE = 25;

    public $username;
    // protected $username;
    // private $username;

    public function getUsername(){
        // code...
    }
}