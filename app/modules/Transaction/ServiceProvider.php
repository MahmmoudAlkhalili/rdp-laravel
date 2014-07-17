<?php namespace App\Modules\Transaction;
 
class ServiceProvider extends \App\Modules\ServiceProvider {
 
    public function register()
    {
        parent::register('Transaction');
    }
 
    public function boot()
    {
        parent::boot('Transaction');
    }
 
}