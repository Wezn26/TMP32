<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\Builder;

use App\Creational\Builder\Interfaces\Builder;

/**
 * Description of TextBuilder
 *
 * @author leonid
 */
class TextBuilder implements Builder
{
    private Message $message;
    
    public function make() 
    {
        $this->message = new Message();
    }


    public function makeHeader() 
    {
        $this->message->setPart(new Header('Header Line!!!'));
    }

    public function makeBody() 
    {
        $this->message->setPart(new Body('Body Line!!!'));
    }    

    public function makeFooter() 
    {
        $this->message->setPart(new Footer('Footer Line!!!'));
    }
    
    public function makeCustom() 
    {
        $this->message->setPart(new Custom('Custom Line!!!'));
    }
    
     public function getText() 
    {
         return $this->message;
    }
   
}
