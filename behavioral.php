<?php

use App\Behavioral\ObjectNull\Developer;
use App\Behavioral\ObjectNull\NullWorker;
use App\Behavioral\ObjectNull\ObjectManager;
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

$objectManager->goWork();
$nullManager->goWork();

// OBJECT NULL END TEMPLATE

