<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Chain;

use App\Behavioral\Chain\Interfaces\TaskInterface;

/**
 * Description of DevTask
 *
 * @author leonid
 */
class DevTask implements TaskInterface
{
    private array $arr = [1, 2, 3];    
    
    public function getArray(): array
    {
        return $this->arr;
    }
}
