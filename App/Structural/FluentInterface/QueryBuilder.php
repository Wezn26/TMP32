<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\FluentInterface;

/**
 * Description of QueryBuilder
 *
 * @author leonid
 */
class QueryBuilder 
{
    private array $select = [];
    private array $from = [];
    private array $where = [];
    
    public function select(array $select): object 
    {
        $this->select = $select;
        return $this;
    }
    
    public function from(array $from): object
    {
        $this->from = $from;
        return $this;
    }
    
    public function where(array $where): object
    {
        $this->where = $where;
        return $this;
    }
    
    public function get(): string
    {
        return sprintf('SELECT %s FROM %s WHERE %s',
                join(', ', $this->select),
                join(', ', $this->from),
                join(' AND ', $this->where)
                );
    }
}
