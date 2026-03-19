<?php

namespace App\Services\ToDoList\Contracts;

use Illuminate\Contracts\View\View;

interface SearchTaskServiceContract
{
    /**
     * Summary of list
     * 
     * @param string $search
     * 
     * @return View
     */
    public function list(string $search): View;
}