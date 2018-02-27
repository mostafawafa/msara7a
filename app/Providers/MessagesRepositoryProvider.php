<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\IMessagesRepository;
use App\Repositories\MessagesRepository;
use App\Repositories\MessageTest;

class MessagesRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IMessagesRepository::class,MessagesRepository::class);
    }
}
