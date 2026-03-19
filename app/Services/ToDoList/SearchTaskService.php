<?php

namespace App\Services\ToDoList;

use App\Services\ToDoList\Contracts\SearchTaskServiceContract;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use App\Models\ToDoList;
use Str;

class SearchTaskService implements SearchTaskServiceContract
{
    public function __construct()
    {
        //
    }
    
    /**
     * {@inheritDoc}
     */
    public function list(string $search): View
    {
        $todolists = $this->getList($search);
        return view("to_do_list/search", compact("todolists"));
    }

    /**
     * Summary of getList
     * 
     * @param srting $search
     * 
     * @return Collection
     */
    private function getList(string $search): Collection
    {
        return ToDoList::where('title', 'LIKE', '%' . $search . '%')->get();
    }
}