<?php

namespace Wilbere\Stripe;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class StripeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->offerPublishing();
    }

    public function offerPublishing()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        if (! function_exists('config_path')) {
            // function not available and 'publish' not relevant in Lumen
            return;
        }

        $this->publishes([
            __DIR__.'/../database/migrations/create_api_stripe_table.php.stub' => $this->getMigrationName('create_api_stripe_table.php'),
        ], 'stripe-migration');

    }


    public function getMigrationName(string $migrationName): string
    {
        $timestamp = date('Y_m_d_His');

        $filesystem = $this->app->make(Filesystem::class);

        return Collection::make([$this->app-database_path().'/migrations/'])
                ->flatMap(fn ($path) => $filesystem->glob($path.'*_'.$migrationName))   
                ->push($this->app->database_path()."/migrations/{$timestamp}_{$migrationName}")
                ->first();
    }

}