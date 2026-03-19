<?php

namespace App\Providers\Status;

use Illuminate\Support\ServiceProvider;
use App\Services\Status\StatusService;
use App\Services\Status\Contracts\StatusServiceContract;

class StatusServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(StatusServiceContract::class, StatusService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [StatusServiceContract::class];
    }
}