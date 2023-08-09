<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\DataMapper;

/**
 * Description of WorkerStorageAdapter
 *
 * @author leonid
 */
class WorkerStorageAdapter 
{
    private array $data = [];
    
    public function __construct(array $data) 
    {
        $this->data = $data;
    }
    
    public function find($id): array|null
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
