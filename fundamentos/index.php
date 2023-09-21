<?php

// include 'greet.php'; # Si este archivo no existe, PHP arroja una advertencia.
// require 'greet.php'; # Si este archivo no existe, PHP arroja un error fatal que detiene al sistema.
require_once 'greet.php'; # De esta manera si requerimos mas de una vez el archivo, no tendremos ningun error.


echo greet('Angel', 'Como andas bro?');
