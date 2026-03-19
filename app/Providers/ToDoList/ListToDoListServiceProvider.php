<?php

namespace App\Providers\ToDoList;

use Illuminate\Support\ServiceProvider;
use App\Services\ToDoList\ToDoListService;
use App\Services\ToDoList\Contracts\ToDoListServiceContract;

class ListToDoListServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(ToDoListServiceContract::class, ToDoListService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ToDoListServiceContract::class];
    }
}