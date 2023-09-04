<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Startegy;

use App\Behavioral\Startegy\Interfaces\Definer;

/**
 * Description of Data
 *
 * @author leonid
 */
class Data
{

    private Definer $definer;
    private int|string|bool $arg;

    public function __construct(Definer $definer)
    {
        $this->definer = $definer;
    }

    public function setArg(int|string|bool $arg): void
    {
        $this->arg = $arg;
    }

    public function executeStrategy(): string
    {
        return $this->definer->define($this->arg);
    }
}
