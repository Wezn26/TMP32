<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Memento;

/**
 * Description of State
 *
 * @author leonid
 */
class State
{

    public const CREATED = 'created';
    public const PROCESS = 'process';
    public const TEST = 'test';
    public const DONE = 'done';

    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function __toString(): string
    {
        return $this->state;
    }
}
