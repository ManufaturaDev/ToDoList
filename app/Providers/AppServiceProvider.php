<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ToDoList\Contracts\ToDoListRepositoryContract;
Use App\Repositories\ToDoList\ToDoListRepositoryEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ToDoListRepositoryContract::class, ToDoListRepositoryEloquent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
