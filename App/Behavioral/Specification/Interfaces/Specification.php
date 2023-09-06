<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace App\Behavioral\Specification\Interfaces;

use App\Behavioral\Specification\Pupil;

/**
 *
 * @author leonid
 */
interface Specification
{
    public function isNormal(Pupil $pupil): bool;
}
