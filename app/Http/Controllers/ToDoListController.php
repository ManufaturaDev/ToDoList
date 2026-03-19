<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Services\ToDoList\Contracts\ToDoListServiceContract;

class ToDoListController extends Controller
{
    /**
     * Contruct function to put files on board
     */
    public function __construct(protected ToDoListServiceContract $service) {

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
