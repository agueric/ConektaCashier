<?php

namespace CityWifi\ConektaCashier;

use Illuminate\Support\ServiceProvider;

class ConektaCashierServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('CityWifi\ConektaCashier\BillableRepositoryInterface', function () {
            return new EloquentBillableRepository();
        });
        $this->app->singleton('command.conekta.cashier.table', function ($app) {
            return new CashierTableCommand();
        });
        $this->commands('command.conekta.cashier.table');
    }
}
