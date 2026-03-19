<?php

namespace App\Services\ToDoList;

use App\Services\ToDoList\Contracts\CreateTaskServiceContract;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use App\Models\ToDoList;

class CreateTaskService implements CreateTaskServiceContract
{
   
    public function __construct()
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function create(): View
    {
        return view('sport/create');
    }
}