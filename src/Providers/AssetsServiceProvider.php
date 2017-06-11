<?php

namespace Aliraqi\Assets\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AssetsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('scripts', function ($key) {
            return "<?php echo e(scripts($key)); ?>";
        });

        Blade::directive('styles', function ($key) {
            return "<?php echo e(styles($key)); ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/assets.php', 'assets');

        if (! file_exists(config_path('assets.php'))) {
            $this->publishes([
                __DIR__.'/../config/assets.php' => config_path('assets.php'),
            ], 'laravel-asset');
        }
    }
}
