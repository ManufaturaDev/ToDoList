<?php

namespace App\Services\ToDoList\Contracts;

use Illuminate\Contracts\View\View;
use App\Models\ToDoList;

interface UpdateTaskServiceContract
{
    /**
     * Summary of update sport
     * 
     * @param array $taskData
     * 
     * @return bool
     */
    public function update(array $taskData): bool;
}