<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Specification;

use App\Behavioral\Specification\Interfaces\Specification;

/**
 * Description of NotSpecification
 *
 * @author leonid
 */
class NotSpecification implements Specification
{
    private Specification $specification;
    
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function isNormal(Pupil $pupil): bool
    {
        return !$this->specification->isNormal($pupil);
    }
}
