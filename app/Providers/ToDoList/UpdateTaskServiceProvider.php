<?php

namespace App\Providers\ToDoList;

use Illuminate\Support\ServiceProvider;
use App\Services\ToDoList\UpdateTaskService;
use App\Services\ToDoList\Contracts\UpdateTaskServiceContract;

class UpdateTaskServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(UpdateTaskServiceContract::class, UpdateTaskService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [UpdateTaskServiceContract::class];
    }
}