<?php

require_once('Guest.php');
require_once('User.php');
require_once('Admin.php');

$guest = new Guest();
$user = new User('Juan Perez');
$admin = new Admin('Hugo Leon');


echo $guest->login();
echo $user->login();
echo $admin->login();
