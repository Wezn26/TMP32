<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

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
use App\Structural\Flyweight\MailFactory;
use App\Structural\Proxy\WorkerProxy;
use App\Structural\Registry\Registry;
use App\Structural\Registry\Service;

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

//var_dump($query);

// FLYWEIGHT
$mailFactory = new MailFactory();
$mail = $mailFactory->getMail(10, 'business');
$mail2 = $mailFactory->getMail(11, 'job');
//var_dump($mail->render());
//var_dump($mail2->render());

// PROXY
$workerProxy = new WorkerProxy();
$workerProxy->closedHours(10);
$workerProxy->closedHours(10);
$salary = $workerProxy->countSalary();

var_dump($salary);


