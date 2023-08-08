<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\DependencyInjection;

/**
 * Description of ControllerConfiguration
 *
 * @author leonid
 */
class ControllerConfiguration 
{
    private string $name;
    private string $action;
    
    
    
    public function __construct(string $name, string $action) 
    {
        $this->name = $name;
        $this->action = $action;
    }
    
    public function getName(): string 
    {
        return $this->name;
    }
    
    public function setName(string $name): void 
    {
        $this->name = $name;
    }

    public function getAction(): string 
    {
        return $this->action;
    }    

    public function setAction(string $action): void 
    {
        $this->action = $action;
    }



}
