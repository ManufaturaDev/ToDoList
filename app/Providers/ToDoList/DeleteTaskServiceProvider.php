<?php

namespace App\Providers\ToDoList;

use Illuminate\Support\ServiceProvider;
use App\Services\ToDoList\DeleteTaskService;
use App\Services\ToDoList\Contracts\DeleteTaskServiceContract;

class DeleteTaskServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(DeleteTaskServiceContract::class, DeleteTaskService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [DeleteTaskServiceContract::class];
    }
}