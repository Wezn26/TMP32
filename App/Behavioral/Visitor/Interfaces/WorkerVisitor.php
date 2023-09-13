<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace App\Behavioral\Visitor\Interfaces;

/**
 *
 * @author leonid
 */
interface WorkerVisitor
{
    public function visitDeveloper(Worker $developer);
    public function visitDesigner(Worker $designer);
}
