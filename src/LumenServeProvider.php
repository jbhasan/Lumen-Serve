<?php

namespace Sayeed\LumenServe;

use Illuminate\Support\ServiceProvider;

class LumenServeProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            \Sayeed\LumenServe\ServeCommand::class,
        ]);
    }
}
