<?php

namespace App\Services\ToDoList\Contracts;

use Illuminate\Contracts\View\View;

interface ToDoListServiceContract
{
    /**
     * Summary of list
     * 
     * @return View
     */
    public function list(): View;
}