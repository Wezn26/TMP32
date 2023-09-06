<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Command;

use App\Behavioral\Command\Interfaces\Command;

/**
 * Description of Message
 *
 * @author leonid
 */
class Message implements Command
{
    private Output $output;
    
    public function __construct(Output $output)
    {
        $this->output = $output;
    }

    
    public function execute()
    {
        $this->output->write('Some string for execute!!!');
    }
}
