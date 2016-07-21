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
        $this->registerStorageBindings();
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
        $app->singleton('onex.oauth2.repository.access.token', function ($app) {
            
        });
    }
}