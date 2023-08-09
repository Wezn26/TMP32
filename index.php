<?php
include './autoload.php';

use App\Creational\AbstarctFactory\Native\NativeWorkerFactory;
use App\Creational\AbstarctFactory\Outsource\OutsourceWorkerFactory;
use App\Creational\Builder\Operator;
use App\Creational\Builder\TextBuilder;
use App\Creational\Factory\WorkerFactory;
use App\Creational\Pool\WorkerPool;
use App\Creational\Prototype\Developer;
use App\Creational\Singleton;
use App\Creational\StaticFactory\WorkerFactory as StaticWorkerFactory;
use App\Structural\Adapter\NativeDeveloper;
use App\Structural\Adapter\OutsourceDeveloper;
use App\Structural\Adapter\OutsourceWorkerAdapter;
use App\Structural\Bridge\HTMLText;
use App\Structural\Bridge\HTMLTextService;
use App\Structural\Bridge\SimpleText;
use App\Structural\Bridge\SimpleTextService;
use App\Structural\Composite\Body;
use App\Structural\Composite\Footer;
use App\Structural\Composite\Header;
use App\Structural\Composite\Mail;
use App\Structural\DataMapper\WorkerMapper;
use App\Structural\DataMapper\WorkerStorageAdapter;
use App\Structural\Decorator\Developer as DeveloperDecorator;
use App\Structural\Decorator\DeveloperOverTime;
use App\Structural\Decorator\DeveloperTooOverTime;
use App\Structural\DependencyInjection\Controller;
use App\Structural\DependencyInjection\ControllerConfiguration;
use App\Structural\Facade\Designer;
use App\Structural\Facade\Developer as DeveloperFacade;
use App\Structural\Facade\WorkerFacade;
use App\Structural\FluentInterface\QueryBuilder;
use App\Structural\Registry\Registry;
use App\Structural\Registry\Service;

// CREATIONAL TEMPLATES START

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
//$builder->make();
//$message = $operator->make($builder);

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

//$worker->work();

//var_dump($pool->getFreeWorkers());
//var_dump($pool->getBusyWorkers());

//CREATIONAL TEMPLATES END

// STRUCTURAL TEMPLATES START

// DEPENDENCY INJECTION
$configuration = new ControllerConfiguration('PostController', 'index');
$configurationShow = new ControllerConfiguration('PostController', 'show');
$configurationTagIndex = new ControllerConfiguration('TagController', 'index');

$controller = new Controller($configuration);
$controllerShow = new Controller($configurationShow);
$controllerTagIndex = new Controller($configurationTagIndex);

//var_dump($controller->getConfiguration());
//var_dump($controllerShow->getConfiguration());
//var_dump($controllerTagIndex->getConfiguration());

// REGISTRY
$service = new Service();
Registry::setServices(1, $service);
$service = Registry::getServices(1);
//var_dump($service);

// COMPOSITE
$mail = new Mail();
$mail->addPart(new Header('Header'));
$mail->addPart(new Body('Body'));
$mail->addPart(new Footer('Footer'));

//var_dump($mail->render());

// ADAPTER
$nativeDeveloper = new NativeDeveloper();
$outsourceDeveloper = new OutsourceDeveloper();

$outsourceWorkerAdapter = new OutsourceWorkerAdapter($outsourceDeveloper);
//var_dump($nativeDeveloper->countSalary());
//var_dump($outsourceWorkerAdapter->countSalary());

// BRIDGE
$simpleText = new SimpleText();
$htmlText = new HTMLText();

$simpleTextService = new SimpleTextService($simpleText);
$htmlTextService = new HTMLTextService($htmlText);

//var_dump($simpleTextService->getFormatter('Hello'));
//var_dump($htmlTextService->getFormatter('Hello'));

// DATA MAPPER
$data = [
    1 => [
        'name' => 'Vasya'
    ]
];

$workerStorageAdapter = new WorkerStorageAdapter($data);
$workerMapper = new WorkerMapper($workerStorageAdapter);

$worker = $workerMapper->findById(1);
$worker2 = $workerMapper->findById(2);
//var_dump($worker->getName());
//var_dump($worker2);

// DECORATOR
$developer = new DeveloperDecorator();

$developerOverTime = new DeveloperOverTime($developer);
$developerTooOverTime = new DeveloperTooOverTime($developer);

//var_dump($developer->countSalary());
//var_dump($developerOverTime->countSalary());
//var_dump($developerTooOverTime->countSalary());

// FACADE
$developer = new DeveloperFacade();
$designer = new Designer();

$workerFacade = new WorkerFacade($developer, $designer);

//$workerFacade->startWork();
//$workerFacade->stopWork();

// FLUENT INTERFACE
$queryBuilder = new QueryBuilder();
$query = $queryBuilder->select(['title', 'id'])
                      ->from(['posts'])
                      ->where(['views > 20'])
                      ->get();

var_dump($query);




// STRUCTURAL TEMPLATES END


