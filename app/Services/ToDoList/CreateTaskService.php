<?php

namespace App\Services\ToDoList;

use App\Services\ToDoList\Contracts\CreateTaskServiceContract;
use App\Services\Status\Contracts\StatusServiceContract;
use Illuminate\Contracts\View\View;

class CreateTaskService implements CreateTaskServiceContract
{
   
    public function __construct(protected StatusServiceContract $statusSevice)
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function create(): View
    {
        $statusColection = $this->statusSevice->getList();
            
        return view('to_do_list/create_task', compact('statusColection'));
    }
}