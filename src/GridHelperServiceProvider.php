<?php

namespace Bunta\GridHelper;

/**
 * 
 * @author 
 */
use Illuminate\Support\ServiceProvider;

class GridHelperServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/views', 'gridhelper');
//        $this->publishes([
//            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
//                ], 'migrations');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/gridhelper'),
        ]);
    }

    public function register() {
//          $this->mergeConfigFrom(
//                __DIR__ . '/config/translations.php', 'translations'
//        );
    }

}
