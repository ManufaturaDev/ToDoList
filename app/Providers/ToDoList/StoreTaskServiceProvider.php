<?php

namespace App\Providers\ToDoList;

use Illuminate\Support\ServiceProvider;
use App\Services\ToDoList\StoreTaskService;
use App\Services\ToDoList\Contracts\StoreTaskServiceContract;

class StoreTaskServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(StoreTaskServiceContract::class, StoreTaskService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [StoreTaskServiceContract::class];
    }
}