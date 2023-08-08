<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Composite;

use App\Structural\Composite\Interfaces\Renderable;

/**
 * Description of Mail
 *
 * @author leonid
 */
class Mail implements Renderable
{
    private array $parts = [];


    public function render(): string 
    {
        $result = '';
        foreach ($this->parts as $part) {
            $result .= $part->render();
        }
        return $result;
    }
    
    public function addPart(Renderable $part) 
    {
        $this->parts[] = $part;
    }
}
