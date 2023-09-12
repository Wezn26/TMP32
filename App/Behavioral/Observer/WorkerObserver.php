<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Observer;

use SplObserver;
use SplSubject;

/**
 * Description of WorkerObserver
 *
 * @author leonid
 */
class WorkerObserver implements SplObserver
{
    private array $workers = [];
    
    public function getWorkers(): array
    {
        return $this->workers;
    }

    public function update(SplSubject $subject): void
    {
        $this->workers[] = clone $subject;
    }
}
