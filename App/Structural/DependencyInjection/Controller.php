<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\DependencyInjection;

/**
 * Description of Controller
 *
 * @author leonid
 */
class Controller 
{
    private ControllerConfiguration $controllerConfiguration;
    
    public function __construct(ControllerConfiguration $controllerConfiguration) 
    {
        $this->controllerConfiguration = $controllerConfiguration;
    }
    
    public function getConfiguration(): string
    {
        return $this->controllerConfiguration->getName(). '@' .
                $this->controllerConfiguration->getAction();
    }

}
