<?php

namespace App\Services\ToDoList;

use App\Models\ToDoList;
use App\Services\ToDoList\Contracts\StoreTaskServiceContract;
use App\Repositories\ToDoList\Contracts\ToDoListRepositoryContract;
use App\Traits\ToDoListTrait;

class StoreTaskService implements StoreTaskServiceContract
{
    use ToDoListTrait;
   
    public function __construct(protected ToDoListRepositoryContract $toDoListRepository)
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function store(array $taskData): ToDoList
    {
        if( $taskData['expected_date'] ) {
            $taskData['expected_date'] = $this->convertDate($taskData['expected_date']);   
        }
        
        return $this->toDoListRepository->store($taskData);
    }
}