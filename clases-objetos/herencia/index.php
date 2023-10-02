<?php

class User{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return "Soy $this->name <br/>";
    }

    # Palabra 'final' evita que el metodo se pueda sobreescribir desde otras clases
    /* final public function getName(){
        return "Soy $this->name <br/>";
    } */
}

# tambien puede ser utilizada la palabra 'final' para clases
/* final class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return "Soy $this->name <br/>";
    }
} */

class Admin extends User{

    public function getName(){
        return "Imprimiendo desde la clase Admin $this->name";
    }
    
    /* public function getName(){
        return "Sobre-escribiendo el metodo getName $this->name";
    } */
}

$admin = new User('Administrator');
echo $admin->getName();