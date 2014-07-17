<?php namespace App\Modules\Core;
 
class ServiceProvider extends \App\Modules\ServiceProvider {
 
    public function register()
    {
        parent::register('Core');
    }
 
    public function boot()
    {
        parent::boot('Core');
        
    }
 
}