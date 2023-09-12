<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Mediator;

/**
 * Description of Worker
 *
 * @author leonid
 */
abstract class Worker
{

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        printf('Hello!!!');
    }

    public function work(): string
    {
        return $this->name . ' is working!!!';
    }
}
