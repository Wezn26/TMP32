<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\Pool;

/**
 * Description of WorkerPool
 *
 * @author leonid
 */
class WorkerPool 
{
    private array $freeWorkers = [];
    private array $busyWorkers = [];
    
    public function getFreeWorkers(): array 
    {
        return $this->freeWorkers;
    }
    
    public function setFreeWorkers(array $freeWorkers): array
    {
        $this->freeWorkers = $freeWorkers;
    }

    public function getBusyWorkers(): array 
    {
        return $this->busyWorkers;
    }    

    public function setBusyWorkers(array $busyWorkers): array
    {
        $this->busyWorkers = $busyWorkers;
    }
    
    public function getWorker(): Worker
    {
        //return $worker = new Worker();
        if (count($this->freeWorkers) === 0) {
            $worker = new Worker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        
        $this->busyWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }
    
    public function release(Worker $worker) 
    {
        $key = spl_object_hash($worker);
        
        if (isset($this->busyWorkers[$key])) {
            unset($this->busyWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }


}
