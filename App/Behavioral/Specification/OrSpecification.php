<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Specification;

use App\Behavioral\Specification\Interfaces\Specification;

/**
 * Description of OrSpecification
 *
 * @author leonid
 */
class OrSpecification implements Specification
{
    private array $specification;

    public function __construct(Specification ...$specification)
    {
        $this->specification = $specification;
    }

    public function isNormal(Pupil $pupil): bool
    {
        foreach ($this->specification as $specification) {
            if ($specification->isNormal($pupil)) {
                return true;
            }
        }
        return false;
    }
}
