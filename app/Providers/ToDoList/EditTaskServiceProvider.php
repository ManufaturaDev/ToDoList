<?php

namespace App\Providers\ToDoList;

use Illuminate\Support\ServiceProvider;
use App\Services\ToDoList\EditTaskService;
use App\Services\ToDoList\Contracts\EditTaskServiceContract;

class EditTaskServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(EditTaskServiceContract::class, EditTaskService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [EditTaskServiceContract::class];
    }
}