<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Composite;

use App\Structural\Composite\Interfaces\Renderable;

/**
 * Description of Header
 *
 * @author leonid
 */
class Header extends Part implements Renderable
{    
    public function render(): string 
    {
        return $this->getText();
    }
}