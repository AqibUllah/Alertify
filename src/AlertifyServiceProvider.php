<?php

namespace Alertify\Alert;

//use Alertify\Alert\View\Components\success;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AlertifyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishAssets();
        $this->loadViews();
        $this->publishComponents();
        $this->publishConfig();
    }

    private function publishAssets():void
    {
        $path = __DIR__.'/public';
        $this->publishes([$path => public_path('vendor/alertify')], 'public');
    }

    private function loadViews():void
    {
        $path = __DIR__.'/resources/views';
        $this->loadViewsFrom($path,'Alertify');
    }

    private function publishConfig():void
    {
        $path = __DIR__.'/config/alertify.php';
        $this->publishes([$path => config_path('alertify.php')]);
    }

    private function publishComponents():void
    {
        $namespace = 'Alertify\\Alert\\views\\components';
        Blade::componentNamespace($namespace,'alertify');
    }
}
