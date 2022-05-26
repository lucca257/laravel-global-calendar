<?php

namespace Fintools\Calendar;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class TimezonesController extends Controller
{
    public function index($timezone)
    {
        return Carbon::now($timezone)->toDateTimeString();
    }
}
