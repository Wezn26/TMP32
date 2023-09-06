<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Interpreter;

/**
 * Description of Context
 *
 * @author leonid
 */
class Context
{

    private array $worker = [];

    public function setWorker(string $worker): void
    {
        $this->worker[] = $worker;
    }

    public function lookUp($key): string|bool
    {
        if (isset($this->worker[$key])) {
            return $this->worker[$key];
        }
        return false;
    }
}
