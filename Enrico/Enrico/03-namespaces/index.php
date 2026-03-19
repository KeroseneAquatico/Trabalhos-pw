<?php

require __DIR__ . "/../source/Models/User.php";

use source\Models\User;

$user = new User("skibidi", "skibidi123@gmail.com");

var_dump($user);