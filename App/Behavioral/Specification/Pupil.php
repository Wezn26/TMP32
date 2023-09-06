<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Specification;

/**
 * Description of Pupil
 *
 * @author leonid
 */
class Pupil
{

    private int $rate = 0;

    public function __construct(int $rate)
    {
        $this->rate = $rate;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }
}
