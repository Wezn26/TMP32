<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\DataMapper;

/**
 * Description of WorkerMapper
 *
 * @author leonid
 */
class WorkerMapper 
{
    private WorkerStorageAdapter $workerStorageAdapter;
    
    public function __construct(WorkerStorageAdapter $workerStorageAdapter) 
    {
        $this->workerStorageAdapter = $workerStorageAdapter;
    }
    
    private function make($args) : object
    {
        return Worker::make($args);
    }


    public function findById($id): string|object
    {
        $res = $this->workerStorageAdapter->find($id);
        
        if (null === $res) {
            return 'Worker with this id doesnt exists!!!';
        }
        return $this->make($res);
    }
    

}
