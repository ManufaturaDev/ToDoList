<?php

namespace App\Services\ToDoList\Contracts;

use Illuminate\Contracts\View\View;
use App\Models\ToDoList;

interface StoreTaskServiceContract
{
    /**
     * Summary of store
     * 
     * @param array $taskData
     * 
     * @return ToDoList
     */
    public function store(array $taskData): ToDoList;

}