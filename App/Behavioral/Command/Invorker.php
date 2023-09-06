<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Command;

use App\Behavioral\Command\Interfaces\Command;

/**
 * Description of Invorker
 *
 * @author leonid
 */
class Invorker
{
    private Command $command;
    
    public function getCommand(): Command
    {
        return $this->command;
    }
    
    public function run()
    {
        $this->command->execute();
    }


}
