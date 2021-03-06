<?php

namespace Onex\OAuth2Server;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->setupConfig();
        $this->registerRepositoryBindings();
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        
    }
    
    /**
     * Setup the configuration.
     *
     * @return void
     */
    public function setupConfig()
    {
    }

    /**
     * Bind the storage implementations to the IoC container.
     *
     * @return void
     */
    public function registerRepositoryBindings()
    {
        $this->registerAccessTokenRepository();
        $this->registerClientRepository();
        $this->registerRefreshTokenRepository();
        $this->registerScopeRepository();
        $this->registerAuthCodeRepository();
        $this->registerUserRepository();
    }

    public function registerAccessTokenRepository() {
        $this->app->singleton('onex.oauth2.repository.access.token', function ($app) {
            
        });
    }

    public function registerClientRepository()
    {
    }

    public function registerRefreshTokenRepository()
    {
    }

    public function registerScopeRepository()
    {
    }

    public function registerAuthCodeRepository()
    {
    }

    public function registerUserRepository()
    {
    }
}