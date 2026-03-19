<?php

namespace App\Services\ToDoList\Contracts;

use Illuminate\Contracts\View\View;
use App\Models\ToDoList;

interface DeleteTaskServiceContract
{
    /**
     * Summary of login
     * 
     * @param int $id
     * 
     * @return bool|null
     */
    public function delete(int  $id): bool|null;

}