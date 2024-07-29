<?php

include 'vendor/autoload.php';

include './entities/warriorClass.php';
include  './entities/wizardClass.php';
include './entities/fightClass.php';

$wizard = new \entities\wizardClass( 50);
$warrior = new \entities\warriorClass( 120, 50);

$fight = new \entities\fightClass($wizard, $warrior);
$fight->start();
