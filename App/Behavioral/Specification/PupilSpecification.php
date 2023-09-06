<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Specification;

use App\Behavioral\Specification\Interfaces\Specification;

/**
 * Description of PupilSpecification
 *
 * @author leonid
 */
class PupilSpecification implements Specification
{
    private int $neeedRate = 0;
    
    public function __construct(int $neeedRate)
    {
        $this->neeedRate = $neeedRate;
    }

    public function isNormal(Pupil $pupil): bool
    {
        return $this->neeedRate < $pupil->getRate();
    }
}
