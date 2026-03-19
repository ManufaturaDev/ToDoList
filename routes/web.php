<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
use App\Http\Controllers\CreateTaskController;

Route::get('/', ToDoListController::class)->name('to_do_list.list');

Route::get('/create', CreateTaskController::class)->name('to_do_list.create.task');
