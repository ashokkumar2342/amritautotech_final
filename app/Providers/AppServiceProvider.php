<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         
         
        
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m-d-Y h:i') ?>";
        });
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m-d-Y'); ?>";
        });
        Blade::directive('time', function ($expression) {
            return "<?php echo ($expression)->format('H:i'); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
