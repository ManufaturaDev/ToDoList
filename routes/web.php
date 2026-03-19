<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\StoreTaskController;
use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\UpdateTaskController;
use App\Http\Controllers\SearchTaskController;

Route::get('/', ToDoListController::class)->name('to_do_list.list');

Route::get('/create', CreateTaskController::class)->name('to_do_list.create.task');

Route::post('/store', StoreTaskController::class)->name('to_do_list.store.task');

Route::get('/delete/{id}', DeleteTaskController::class)->name('to_do_list.delete.task');

Route::get('/edit/{id}', EditTaskController::class)->name('to_do_list.edit.task');

Route::post('/update', UpdateTaskController::class)->name('to_do_list.update.task');

Route::post('/search', SearchTaskController::class)->name('to_do_list.search.task');
