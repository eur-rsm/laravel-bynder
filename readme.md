## Laravel Bynder
Bynder wrapper for Laravel

Rotterdam School of Management, Erasmus University

### Requirements
    At least Laravel 5.5
    
#### Installation

Install this wrapper by the command below:

    composer require eur-rsm/laravel-bynder:dev-master
    
Add to your `config/app.php` alias.
                
    'Bynder' => \EUR\RSM\LaravelBynder\Facades\BynderServiceFacade::class,
    
    php artisan vendor:publish --provider="\EUR\RSM\LaravelBynder\LaravelBynderServiceProvider"
    
Edit the published config `laravel-bynder.php` file located in the `config` directory.
    