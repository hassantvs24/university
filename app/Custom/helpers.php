<?php

use Illuminate\Support\Carbon;

if (!function_exists('pub_date')) {
    function pub_date($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }
}
