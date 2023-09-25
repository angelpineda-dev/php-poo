<?php

abstract class Polimorfismo{
    protected $name;

    private function getClassName(){
        return get_called_class();
    }

    public function login(){
        return "Mi nombre es $this->name  desde la clase {$this->getClassName()} <br/>";
    }
}

class Admin extends Polimorfismo{
    public function __construct($name){
        $this->name = $name;
    }
}

class User extends Polimorfismo
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Guest extends Polimorfismo{
    protected $name = 'Invitado';
}

$guest = new Guest();
$user = new User('Manuel Macron');
$admin = new Admin('Tomas Perez');

echo $guest->login();
echo $user->login();
echo $admin->login();
