<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Visitor;

use App\Behavioral\Visitor\Interfaces\Worker;
use App\Behavioral\Visitor\Interfaces\WorkerVisitor;

/**
 * Description of RecorderVisitor
 *
 * @author leonid
 */
class RecorderVisitor implements WorkerVisitor
{

    private array $visited = [];

    public function getVisited(): array
    {
        return $this->visited;
    }

    public function visitDeveloper(Worker $developer)
    {
        $this->visited[] = $developer;
    }

    public function visitDesigner(Worker $designer)
    {
        $this->visited[] = $designer;
    }
}
