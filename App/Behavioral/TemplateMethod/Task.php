<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\TemplateMethod;

/**
 * Description of Task
 *
 * @author leonid
 */
abstract class Task
{

    abstract protected function printCustom();

    public function printSections()
    {
        $this->printHeader();
        $this->printBody();
        $this->printFooter();
        $this->printCustom();
    }

    private function printHeader()
    {
        printf('Header' . PHP_EOL);
    }

    private function printBody()
    {
        printf('Body' . PHP_EOL);
    }

    private function printFooter()
    {
        printf('Footer' . PHP_EOL);
    }
}
