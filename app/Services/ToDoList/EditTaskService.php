<?php

namespace App\Services\ToDoList;

use App\Services\ToDoList\Contracts\EditTaskServiceContract;
use App\Services\Status\Contracts\StatusServiceContract;
use Illuminate\Contracts\View\View;
use App\Models\ToDoList;

class EditTaskService implements EditTaskServiceContract
{
   
    public function __construct(protected StatusServiceContract $statusSevice)
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function edit(int $id): View
    {
        $statusColection = $this->statusSevice->getList();

        $task = $this->getSport( $id);
        return view("to_do_list/edit_task", compact("task", "statusColection"));
    }

    /**
     * Summary of getList
     * 
     * @return ToDoList
     */
    private function getSport(int $id): ToDoList
    {
        return ToDoList::where('id', $id)->first();
    }
}