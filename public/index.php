<?php

use App\Hello;
use CowSay\Cow;

require '../vendor/autoload.php';

$hello = new Hello();
echo $hello->talk();


//Exercice avec la vache Composer-3
$joel = new Cow('Hello Farm!');
$joel->say();
$joel->setTongue('U');
echo $joel;