<?php

namespace App\Services\ToDoList;

use App\Services\ToDoList\Contracts\ToDoListServiceContract;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use App\Models\ToDoList;

class ToDoListService implements ToDoListServiceContract
{
    public function __construct()
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function list(): View
    {
        $todolists = $this->getList();
        return view("to_do_list/list", compact("todolists"));
    }

    /**
     * Summary of getList
     * 
     * @return Collection
     */
    private function getList(): Collection
    {
        return ToDoList::orderBy('id')->get();
    }
}