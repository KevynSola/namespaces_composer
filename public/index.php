<?php

use App\Hello;

require '../vendor/autoload.php';
require '../src/Hello.php';

$hello = new Hello();
echo $hello->talk();