<?php

namespace Fuseday\Poc2Card;

use Illuminate\Support\ServiceProvider;

class Poc2CardServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        rescue(fn() => $this->app
            ->make('torque')
            ->registerComponent('fuseday.poc2-card', [
                '<script src="/_torque/lego/fuseday/poc2-card/mypackage.js"></script>',
            ])
        );

    }
}
