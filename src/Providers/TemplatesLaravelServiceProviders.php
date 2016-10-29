<?php

namespace Igorwanbarros\TemplatesLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class TemplatesLaravelServiceProviders extends ServiceProvider
{

    /**
     * @return void
     */
    public function register()
    {

    }


    /**
     * @return void
     */
    public function boot()
    {
        $this->publishTemplates();

        //$this->loadViewsFrom(__DIR__ . '/views', 'templates-laravel');
    }


    protected function publishTemplates()
    {
        $path = __DIR__ . '/../templates';
        $directory = scandir($path);

        foreach ($directory as $dir) {
            if (strlen($dir) > 2) {
                $this->publishes([
                    "$path/{$dir}/resources"  => base_path("resources/views/templates/{$dir}"),
                    "$path/{$dir}/public"     => base_path("public/templates/{$dir}/"),
                ]);
            }
        }
    }
}
