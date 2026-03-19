<?php

namespace App\Repositories\ToDoList;

use App\Repositories\Base\BaseRepositoryEloquent;
use App\Repositories\ToDoList\Contracts\ToDoListRepositoryContract;
use Illuminate\Database\Eloquent\Model;
use App\Models\ToDoList;


class ToDoListRepositoryEloquent extends BaseRepositoryEloquent implements ToDoListRepositoryContract
{
    /**
     * @var ToDoList
     */
    protected $model = ToDoList::class;
}