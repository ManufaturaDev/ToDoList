<?php

namespace App\Services\ToDoList\Contracts;

use Illuminate\Contracts\View\View;

interface CreateTaskServiceContract
{
    /**
     * Summary of creatre
     * 
     * @return View
     */
    public function create(): View;
}