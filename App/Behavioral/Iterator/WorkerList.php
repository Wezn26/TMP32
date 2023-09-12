<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Iterator;

/**
 * Description of WorkerList
 *
 * @author leonid
 */
class WorkerList
{

    private array $list = [];
    private int $index = 0;

    public function getList(): array
    {
        return $this->list;
    }

    public function setList(array $list): void
    {
        $this->list = $list;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): void
    {
        $this->index = $index;
    }

    public function getItem($key): ?Worker
    {
        if ($this->list[$key]) {
            return $this->list[$key];
        }
        return null;
    }

    public function next()
    {
        if ($this->index < count($this->list) - 1) {
            $this->index++;
        }
    }

    public function prev()
    {
        if ($this->index !== 0) {
            $this->index--;
        }
    }

    public function getByIndex(): Worker
    {
        return $this->list[$this->index];
    }

    public function refresh()
    {
        $this->index = 0;
    }
}
