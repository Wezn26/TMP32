<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\Builder;

/**
 * Description of Message
 *
 * @author leonid
 */
class Message 
{
    private string $text = '';
    
    public function setPart($part) 
    {
        $this->text .= $part . PHP_EOL;
    }
    
    public function getText(): string
    {
        return $this->text;
    }
}
