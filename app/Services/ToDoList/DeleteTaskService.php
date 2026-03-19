<?php

namespace App\Services\ToDoList;

use App\Models\ToDoList;
use App\Services\ToDoList\Contracts\DeleteTaskServiceContract;
use App\Repositories\ToDoList\Contracts\ToDoListRepositoryContract;

class DeleteTaskService implements DeleteTaskServiceContract
{
     public function __construct(protected ToDoListRepositoryContract $toDoListRepository)
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function delete(int $id): bool|null
    {
        return $this->toDoListRepository->delete($this->getTask($id));
    }


    private function getTask($id): ToDoList
    {
        return ToDoList::where('id', $id)->first();
    }
}