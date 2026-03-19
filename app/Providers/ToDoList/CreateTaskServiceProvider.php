<?php

namespace App\Providers\ToDoList;

use Illuminate\Support\ServiceProvider;
use App\Services\ToDoList\CreateTaskService;
use App\Services\ToDoList\Contracts\CreateTaskServiceContract;

class CreateTaskServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(CreateTaskServiceContract::class, CreateTaskService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [CreateTaskServiceContract::class];
    }
}