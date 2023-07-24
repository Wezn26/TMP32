<?php
include './autoload.php';

use App\Creational\Factory\WorkerFactory;
use App\Creational\Singleton;
use App\Creational\StaticFactory\WorkerFactory as StaticWorkerFactory;

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
//$developer = DeveloperFactory::make();
//$designer = DesignerFactory::make();

//$developer->work();
//$designer->work();

//VIEW STATIC FACTORY METHOD
$developer = StaticWorkerFactory::make('Developer');
$designer = StaticWorkerFactory::make('Designer');

//var_dump($developer);
$developer->work();
$designer->work();

