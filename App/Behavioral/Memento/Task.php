<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Memento;

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

    public function create()
    {
        $this->state = new State(State::CREATED);
    }

    public function process()
    {
        $this->state = new State(State::PROCESS);
    }

    public function test()
    {
        $this->state = new State(State::TEST);
    }

    public function done()
    {
        $this->state = new State(State::DONE);
    }

    public function saveToMemento(): Memento
    {
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}
