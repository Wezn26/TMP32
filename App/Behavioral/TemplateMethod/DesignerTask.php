<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\TemplateMethod;

/**
 * Description of DesignerTask
 *
 * @author leonid
 */
class DesignerTask extends Task
{

    protected function printCustom()
    {
        printf('For designer ' . PHP_EOL);
    }
}
