<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Flyweight;

/**
 * Description of MailFactory
 *
 * @author leonid
 */
class MailFactory 
{
    private array $pool = [];
    
    public function getMail($id, $typeMail): object 
    {
        if (!isset($this->pool[$id])) {
            $this->pool[$id] = $this->make($typeMail);
        }
        return $this->pool[$id];
    }
    
    private function make($typeMail): object
    {
        if ($typeMail === 'business') {
            return new BusinessMail('Business Text!!!');
        }
        return new JobMail('Job Text!!!');
    }
}
