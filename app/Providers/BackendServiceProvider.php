<?php 
namespace stockrepository;

use Illuminate\Support\Service\Provider;

class BackendServiceProvider extends ServiceProvider {
    
    public function register()
    {
        $this->app->bind('Interfaces/StockRepositoryInterface', 'Repositories/StocksRepository');
    }
}

?>