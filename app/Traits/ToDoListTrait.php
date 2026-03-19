<?php

namespace App\Traits;

trait ToDoListTrait
{
    /**
     * Summary of makeTag
     * 
     * @param string $data
     * 
     * @return string
     */
    public function convertDate(string $data): string
    {
        return implode('-', array_reverse(explode('/', $data)));
    }
}
