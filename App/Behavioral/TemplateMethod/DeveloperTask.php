<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\TemplateMethod;

/**
 * Description of DeveloperTask
 *
 * @author leonid
 */
class DeveloperTask extends Task
{
    
    protected function printCustom()
    {
        printf('For developer ' . PHP_EOL);
    }
}
