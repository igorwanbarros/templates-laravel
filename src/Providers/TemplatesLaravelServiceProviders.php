<?php

namespace Igorwanbarros\TemplatesLaravel\Providers;

use Igorwanbarros\Php2Html\ViewAbstract;
use Illuminate\Support\ServiceProvider;

class TemplatesLaravelServiceProviders extends ServiceProvider
{

    /**
     * @return void
     */
    public function register()
    {
        $this->app->configure('admin-lte-config');
    }


    /**
     * @return void
     */
    public function boot()
    {
        $this->publishTemplates();

        //$this->loadViewsFrom(__DIR__ . '/views', 'templates-laravel');

        if (($templateUse = env('APP_TEMPLATE_USE'))) {
            ViewAbstract::setPersonalizations(config($templateUse . '-config', []));
        }
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

        $this->publishes([
            __DIR__ . '/../configs' => base_path('config'),
        ], 'config-template');
    }
}
