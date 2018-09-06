<?php 

namespace OwowAgency\UserRemoval;

use Illuminate\Support\ServiceProvider;

class UserRemovalServiceProvider extends ServiceProvider
{
    /**
     * This will be used to register config & view in your package namespace.
     *
     * @var  string
     */
    protected $packageName = 'userremoval';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');

        // Register translations
        $this->loadTranslationsFrom(__DIR__.'/../lang', $this->packageName);
        $this->publishes([
            __DIR__.'/../lang' => resource_path('lang/vendor/'. $this->packageName),
        ]);

        // Publish your config
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path($this->packageName.'.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', $this->packageName
        );
    }
}
