<?php
include './autoload.php';

use App\Creational\Factory\WorkerFactory;
use App\Creational\FactoryMethod\DesignerFactory;
use App\Creational\FactoryMethod\DeveloperFactory;
use App\Creational\Singleton;
//VIEW SINGLETON TEMPLATE
$connection = Singleton::getInstance();
$connection::setName('Singleton');

$connection2 = Singleton::getInstance();
//var_dump($connection::getName());
//var_dump($connection2::getName());

//VIEW FACTORY TEMPLATE
$worker = WorkerFactory::make();
$worker->setName('Dan');
//var_dump($worker->getName());

//VIEW FACTORY_METHOD TEMPLATE
$developer = DeveloperFactory::make();
$designer = DesignerFactory::make();

$developer->work();
$designer->work();

