<?php
include './autoload.php';

use App\Creational\Singleton;
use App\Creational\Factory\WorkerFactory;
//VIEW SINGLETON TEMPLATE
$connection = Singleton::getInstance();
$connection::setName('Singleton');

$connection2 = Singleton::getInstance();
//var_dump($connection::getName());
//var_dump($connection2::getName());

//VIEW FACTORY TEMPLATE
$worker = WorkerFactory::make();
$worker->setName('Dan');
var_dump($worker->getName());

