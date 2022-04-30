<?php
use Illuminate\Support\Facades\Route;
Route::get('timezones/{timezone}', 'PCB\TimeZones\TimezonesController@index');
