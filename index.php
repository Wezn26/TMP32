<?php
include './autoload.php';

use App\Creational\AbstarctFactory\Native\NativeWorkerFactory;
use App\Creational\AbstarctFactory\Outsource\OutsourceWorkerFactory;
use App\Creational\Builder\Operator;
use App\Creational\Builder\TextBuilder;
use App\Creational\Factory\WorkerFactory;
use App\Creational\Prototype\Developer;
use App\Creational\Singleton;
use App\Creational\StaticFactory\WorkerFactory as StaticWorkerFactory;
use App\Creational\Pool\WorkerPool;

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
//$developer->work();
//$designer->work();

//VIEW ABSTARCT FACTORY
$nativeDeveloper = NativeWorkerFactory::makeDeveloperWorker();
$outsourceDeveloper = OutsourceWorkerFactory::makeDeveloperWorker();
$nativeDesigner = NativeWorkerFactory::makeDesignerWorker();
$outsorceDesigner = OutsourceWorkerFactory::makeDesignerWorker();

//$nativeDeveloper->work();
//$outsourceDeveloper->work();
//$outsorceDesigner->work();
//$nativeDesigner->work();

//VIEW BUILDER TEMPLATES
$operator = new Operator();
$builder = new TextBuilder();
$builder->make();
$message = $operator->make($builder);

//var_dump($message->getText());

//VIEW PROTOTYPE TEMPLATES
$developer = new Developer();
$developer2 = clone $developer;
$developer->setName('Yuriy');
$developer->setPosition('Major Developer!!!');
$developer2->setName('Yana');
$developer2->setPosition('Junior Developer!!!');
//var_dump($developer->getName());
//var_dump($developer->getPosition());
//var_dump($developer2->getName());
//var_dump($developer2->getPosition());

//POOL VIEW TEMPLATE
$pool = new WorkerPool();
$worker = $pool->getWorker();
$worker2 = $pool->getWorker();
$worker3 = $pool->getWorker();
$pool->release($worker);

$worker->work();

var_dump($pool->getFreeWorkers());
var_dump($pool->getBusyWorkers());

