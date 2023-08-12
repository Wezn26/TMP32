<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Flyweight;

use App\Structural\Flyweight\Interfaces\Mail;

/**
 * Description of BusinessMail
 *
 * @author leonid
 */
class BusinessMail extends TypeMail implements Mail
{    
    public function render(): string 
    {
        return $this->text . 'From Business Mail!!!';
    }
}
