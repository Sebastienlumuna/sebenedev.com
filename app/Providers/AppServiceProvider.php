<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Blade::directive('limit', function ($expression) {
            return "<?php echo \Illuminate\Support\Str::limit($expression); ?>";
        });

        Blade::directive('formatdate', function ($expression) {
            return "<?php echo ($expression)->format('d F Y H:i');  ?>";
        });
    }
}
