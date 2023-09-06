<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Chain;

use App\Behavioral\Chain\Interfaces\TaskInterface;

/**
 * Description of Handler
 *
 * @author leonid
 */
abstract class Handler
{
    private ?Handler $successor;
    
    abstract public function processing(TaskInterface $task): ?array;


    public function __construct(?Handler $successor)
    {
        $this->successor = $successor;
    }
    
    final public function handle(TaskInterface $task)
    {
        $proceed = $this->processing($task);
        
        if (null === $proceed && $this->successor) {
            $proceed = $this->successor->handle($task);
        }
        return $proceed;
    }

}
