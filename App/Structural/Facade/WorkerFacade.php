<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Facade;

/**
 * Description of WorkerFacade
 *
 * @author leonid
 */
class WorkerFacade 
{
    private Developer $developer;
    private Designer $designer;
    
    public function __construct(Developer $developer, Designer $designer) 
    {
        $this->developer = $developer;
        $this->designer = $designer;
    }
    
    public function startWork() 
    {
        $this->developer->starDevelop();
        $this->designer->startDesigner();
    }
    
    public function stopWork() 
    {
        $this->developer->stopDevelop();
        $this->designer->stopDesigner();
    }

}
