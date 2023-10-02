<?php

interface Persona
{
    public function getName();
}

class Admin implements Persona
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$admin = new Admin('Administrador');

echo $admin->getName();