<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ToDoList\Contracts\CreateTaskServiceContract;
use Illuminate\Contracts\View\View;

class CreateTaskController extends Controller
{
     /**
     * Contruct function to put files on board
     */
    public function __construct(protected CreateTaskServiceContract $service) 
        {
        }

    /**
     * Summary of __invoke
     * 
     * @return View
     */
    public function __invoke(): View
    {
        return $this->service->create();
    }
}
