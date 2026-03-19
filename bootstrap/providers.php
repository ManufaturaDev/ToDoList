<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\ToDoList\ListToDoListServiceProvider::class,
    App\Providers\ToDoList\CreateTaskServiceProvider::class,
    App\Providers\ToDoList\StoreTaskServiceProvider::class,
    App\Providers\ToDoList\DeleteTaskServiceProvider::class,
    App\Providers\ToDoList\EditTaskServiceProvider::class,
    App\Providers\ToDoList\UpdateTaskServiceProvider::class,
    App\Providers\Status\StatusServiceProvider::class,
];
