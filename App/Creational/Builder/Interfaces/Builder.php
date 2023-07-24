<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace App\Creational\Builder\Interfaces;

/**
 *
 * @author leonid
 */
interface Builder 
{
    public function makeHeader();
    public function makeBody();
    public function makeFooter();
    public function makeCustom();
    
    public function getText();
}
