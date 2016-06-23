<?php namespace Ebarturen\Autodeploy;
use Illuminate\Support\ServiceProvider;
class AutodeployServiceProvider extends ServiceProvider{


    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    }


    public function register()
    {
        $this->app['Autodeploy'] = $this->app->share(function($app)
        {
            return new Autodeploy;
        });
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Autodeploy', 'Ebarturen\Autodeploy\AutodeployFacade');
        });
    }
}