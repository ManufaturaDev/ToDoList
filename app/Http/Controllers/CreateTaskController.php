<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ToDoList\Contracts\CreateTaskServiceContract;

class CreateTaskController extends Controller
{
     /**
     * Contruct function to put files on board
     */
    public function __construct(protected CreateTaskServiceContract $service) {
    }

    /**
     * Summary of __invoke
     * 
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return $this->service->list();
    }
}
