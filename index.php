<?php
include './autoload.php';

use App\Creational\Singleton;
//VIEW SINGLETON TEMPLATE
$connection = Singleton::getInstance();
$connection::setName('Singleton');

$connection2 = Singleton::getInstance();
var_dump($connection::getName());
var_dump($connection2::getName());

