<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\State;

use App\Behavioral\State\Interfaces\State;

/**
 * Description of Task
 *
 * @author leonid
 */
class Task 
{
    private State $state;
    
    public function getState(): State 
    {
        return $this->state;
    }

    public function setState(State $state): void 
    {
        $this->state = $state;
    }
    
    public static function make(): Task
    {
        $self = new self();
        $self->setState(new Created());
        return $self;
    }
    
    public function proceedToNext()
    {
        $this->state->toNext($this);
    }


}
