<?php

use App\Behavioral\Chain\DevTask;
use App\Behavioral\Chain\Junior;
use App\Behavioral\Chain\Middle;
use App\Behavioral\Chain\Senior;
use App\Behavioral\Command\ChangeStatus;
use App\Behavioral\Command\Invorker;
use App\Behavioral\Command\Message;
use App\Behavioral\Command\Output;
use App\Behavioral\Interpreter\AndExp;
use App\Behavioral\Interpreter\Context;
use App\Behavioral\Interpreter\OrExpression;
use App\Behavioral\Interpreter\VariableExp;
use App\Behavioral\Iterator\Worker;
use App\Behavioral\Iterator\WorkerList;
use App\Behavioral\Mediator\Developer as DeveloperMediator;
use App\Behavioral\Mediator\InfoBase;
use App\Behavioral\Mediator\WorkerInfoBaseMediator;
use App\Behavioral\Memento\Task as Task2;
use App\Behavioral\ObjectNull\Developer;
use App\Behavioral\ObjectNull\NullWorker;
use App\Behavioral\ObjectNull\ObjectManager;
use App\Behavioral\Observer\Worker as Worker2;
use App\Behavioral\Observer\WorkerObserver;
use App\Behavioral\Specification\AndSpecification;
use App\Behavioral\Specification\NotSpecification;
use App\Behavioral\Specification\OrSpecification;
use App\Behavioral\Specification\Pupil;
use App\Behavioral\Specification\PupilSpecification;
use App\Behavioral\Startegy\BoolDefiner;
use App\Behavioral\Startegy\Data;
use App\Behavioral\Startegy\IntDefiner;
use App\Behavioral\Startegy\StringDefiner;
use App\Behavioral\State\Task;
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// START STATE TEMPLATE
$task = Task::make();
$task->proceedToNext();
$task->proceedToNext();
$task->proceedToNext();

$status = $task->getState()->getStatus();
//var_dump($status);
// END STATE TEMPLATE

// START STRATEGY TEMPLATE
$definerInt = new IntDefiner();
$definerString = new StringDefiner();
$definerBool = new BoolDefiner();

$data = new Data($definerInt);
$data->setArg('Some arg for first!!!');
$strategy = $data->executeStrategy();

//var_dump($strategy);

// END STRATEGY TEMPLATE

// OBJECT NULL START TEMPLATE

$developer = new Developer();
$nullableDeveloper = new NullWorker();

$objectManager = new ObjectManager($developer);
$nullManager = new ObjectManager($nullableDeveloper);

//$objectManager->goWork();
//$nullManager->goWork();

// OBJECT NULL END TEMPLATE

// COMMAND TEMPLATE START

$output = new Output();
$invorker = new Invorker();

$message = new Message($output);
$changeStatus = new ChangeStatus($output);
$changeStatus->undo();
$changeStatus->execute();
$message->execute();

//var_dump($output->getBody());

// COMMAND TEMPLATE END

// INTERPRETER TEMPLATE START

$context = new Context();
$context->setWorker('Dan');
$context->setWorker('Bob');

$varExp = new VariableExp(1);
$andExp = new AndExp(1, 3);
$orExp = new OrExpression(1, 3);

//var_dump($varExp->interpreter($context));
//var_dump($andExp->interpreter($context));
//var_dump($orExp->interpreter($context));
// INTERPRETER TEMPLATE END

// SPECIFICATION TEMPLATE START

$spec1 = new PupilSpecification(5);
$spec2 = new PupilSpecification(10);

$pupil = new Pupil(4);


//var_dump($spec1->isNormal($pupil));
//var_dump($spec2->isNormal($pupil));

$andSpecification = new AndSpecification($spec1, $spec2);
$orSpecification = new OrSpecification($spec1, $spec2);
$notSpecification = new NotSpecification($spec1);

//var_dump($andSpecification->isNormal($pupil));
//var_dump($orSpecification->isNormal($pupil));
//var_dump($notSpecification->isNormal($pupil));

// SPECIFICATION TEMPLATE END

// CHAIN TEMPLATE START

$task = new DevTask();

$senior = new Senior(null);
$middle = new Middle($senior);
$junior = new Junior($middle);

//var_dump($junior->handle($task));
// CHAIN TEMPLATE END

// ITERATOR TEMPLATE START

$workerBob = new Worker('Bob');
$workerDan = new Worker('Dan');
$workerKate = new Worker('Kate');

$workerList = new WorkerList();
$workerList->setList([$workerBob, $workerDan, $workerKate]);
//$workerList->next();
//$workerList->next();
//$workerList->prev();
//var_dump($workerList->getByIndex()->getName());

// ITERATOR TEMPLATE END

// MEDIATOR TEMPLATE START

$developerDan = new DeveloperMediator('Dan');
$infobase = new InfoBase();
$workerInfoBaseMediator = new WorkerInfoBaseMediator($developerDan, $infobase);
//$workerInfoBaseMediator->getWorker();

// MEDIATOR TEMPLATE END

// MEMENTO TEMPLATE START

$task = new Task2();
$task->create();

$memento = $task->saveToMemento();
$bool = $task->getState() === $memento->getState();
var_dump($bool);

// MEMENTO TEMPLATE END

// OBSERVER TEMPLATE START

$observer = new WorkerObserver();
$worker = new Worker2();
$worker->attach($observer);

$worker->setName('Bob');
$worker->setName('Dan');
$worker->setName('Kate');

//var_dump($observer->getWorkers());
//var_dump(count($observer->getWorkers()));

// OBSERVER TEMPLATE END

