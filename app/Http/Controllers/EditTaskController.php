<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ToDoList\Contracts\EditTaskServiceContract;
use Illuminate\Contracts\View\View;

class EditTaskController extends Controller
{
    /**
     * Contruct function to put files on board
     */
    public function __construct(protected EditTaskServiceContract $service) {
    }

     /**
     * Summary of __invoke
     * 
     * @return View
     */
    public function __invoke($id): View
    {
        return $this->service->edit($id);
    }
}
