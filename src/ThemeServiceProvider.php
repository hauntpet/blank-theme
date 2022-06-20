<?php

namespace Package\Name;

use HauntPet\Theme\Facades\Repository;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $key = 'theme-name';

        Repository::add($key, [
            'title' => 'Theme Title'
        ], [
            // options
        ]);

        Repository::loadViews($key, __DIR__ . '/../views');
    }
}
