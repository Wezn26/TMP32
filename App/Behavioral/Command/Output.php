<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Command;

/**
 * Description of Output
 *
 * @author leonid
 */
class Output
{

    private bool $isEnable = true;
    private string $body = '';

    public function getBody(): string
    {
        return $this->body;
    }

    public function enable()
    {
        $this->isEnable = true;
    }

    public function desable()
    {
        $this->isEnable = false;
    }

    public function write($str)
    {
        if ($this->isEnable) {
            $this->body = $str;
        }
    }
}
