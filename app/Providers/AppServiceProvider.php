<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Bmnbarang;
use App\Observers\BarangObserver;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // default Laravel public path
    }

    public function boot()
    {
        //
    }
}
