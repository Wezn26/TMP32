<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Bridge;

/**
 * Description of HTMLTextService
 *
 * @author leonid
 */
class HTMLTextService extends BridgeService
{    
    public function getFormatter($str): string 
    {
        return $this->formatter->format($str);
    }
}
