<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Mediator;

use App\Behavioral\Mediator\Interfaces\Mediator;

/**
 * Description of WorkerInfoBaseMediator
 *
 * @author leonid
 */
class WorkerInfoBaseMediator implements Mediator
{

    private Worker $worker;
    private InfoBase $infobase;

    public function __construct(Worker $worker, InfoBase $infobase)
    {
        $this->worker = $worker;
        $this->infobase = $infobase;
    }

    public function getWorker()
    {
        $this->infobase->printInfo($this->worker);
    }
}
