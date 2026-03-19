<?php

namespace App\Services\ToDoList;

use App\Models\ToDoList;
use App\Services\ToDoList\Contracts\UpdateTaskServiceContract;
use App\Repositories\ToDoList\Contracts\ToDoListRepositoryContract;
use App\Traits\ToDoListTrait;

class UpdateTaskService implements UpdateTaskServiceContract
{
    use ToDoListTrait;
   
    public function __construct(protected ToDoListRepositoryContract $toDoListRepository)
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function update(array $taskData): bool
    {
        if( $taskData['expected_date'] ) {
            $taskData['expected_date'] = $this->convertDate($taskData['expected_date']);   
        }
        $toDoList = $this->toDoListRepository->findBy('id', $taskData['id']);
        return $this->toDoListRepository->update($toDoList, $taskData);
    }
}