<?php

require_once './classes/user.php';
require_once './classes/admin.php';

$user = new User;
$user->type = new Admin;
echo $user->type->greet();

// create a basic class of a user