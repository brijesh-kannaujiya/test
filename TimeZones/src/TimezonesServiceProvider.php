<?php 
namespace PCB\TimeZones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    public function boot()
    {
         
    } 
    public function register()
    {
        include __DIR__.'/routes.php';
    }
}