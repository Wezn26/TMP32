<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Bridge;

use App\Structural\Bridge\Interfaces\Formatter;

/**
 * Description of BridgeService
 *
 * @author leonid
 */
abstract class BridgeService 
{
    protected Formatter $formatter;
    
    public function __construct(Formatter $formatter) 
    {
        $this->formatter = $formatter;
    }
    
    abstract public function getFormatter($str): string;

}
