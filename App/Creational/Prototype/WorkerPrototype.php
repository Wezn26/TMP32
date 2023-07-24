<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\Prototype;

/**
 * Description of WorkerPrototype
 *
 * @author leonid
 */
abstract class WorkerPrototype 
{
    protected string $name;
    protected string $position;
    
    public function getName(): string 
    {
        return $this->name;
    }
    
     public function setName(string $name): void 
     {
        $this->name = $name;
    }

    public function getPosition(): string 
    {
        return $this->position;
    }

   

    public function setPosition(string $position): void 
    {
        $this->position = $position;
    }


}
