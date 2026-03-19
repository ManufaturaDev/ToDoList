<?php

namespace App\Services\ToDoList\Contracts;

use Illuminate\Contracts\View\View;

interface EditTaskServiceContract
{
   /**
     * Summary of list
     * 
     * @return View
     */
    public function edit(int $sportId): View;
}