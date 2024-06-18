<?php

use App\Models\dataBanner;
use App\Models\section;
use App\Models\setting;

// Untuk Setting
function get_setting_value($key)
{
    $data = setting::where('key', $key)->first();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }
}

// Untuk Section
function get_section_data($key)
{
    $data = section::where('post_as', $key)->first();
    if (isset($data)) {
        return $data;
    }
}

// Untuk Data Banner
function get_dataBanner()
{
    $data = dataBanner::all();
    return $data;
}
