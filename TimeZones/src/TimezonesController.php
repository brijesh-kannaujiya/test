<?php
namespace PCB\TimeZones;

use Carbon\Carbon;
use App\Http\Controllers\Controller;

class TimezonesController extends Controller
{
    public static function index($timezone)
    {
        echo "hii";
        echo Carbon::now($timezone)->toDateTimeString();
    }
}