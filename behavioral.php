<?php

use App\Behavioral\Command\ChangeStatus;
use App\Behavioral\Command\Invorker;
use App\Behavioral\Command\Message;
use App\Behavioral\Command\Output;
use App\Behavioral\Interpreter\AndExp;
use App\Behavioral\Interpreter\Context;
use App\Behavioral\Interpreter\OrExpression;
use App\Behavioral\Interpreter\VariableExp;
use App\Behavioral\ObjectNull\Developer;
use App\Behavioral\ObjectNull\NullWorker;
use App\Behavioral\ObjectNull\ObjectManager;
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


var_dump($spec1->isNormal($pupil));
var_dump($spec2->isNormal($pupil));

$andSpecification = new AndSpecification($spec1, $spec2);
$orSpecification = new OrSpecification($spec1, $spec2);
$notSpecification = new NotSpecification($spec1);

var_dump($andSpecification->isNormal($pupil));
var_dump($orSpecification->isNormal($pupil));
var_dump($notSpecification->isNormal($pupil));

// SPECIFICATION TEMPLATE END

