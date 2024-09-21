<?php

namespace App\Providers;

use App\Livewire\AdminNotifications;
use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Filament::registerWidgets([
            AdminNotifications::class,
        ]);
    }
}
