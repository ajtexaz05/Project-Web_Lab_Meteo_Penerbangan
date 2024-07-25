<?php

use App\Models\DataBanner;
use App\Models\Section;
use App\Models\Setting;

// Untuk Setting
function get_setting_value($key)
{
    $data = Setting::where('key', $key)->first();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }
}

// Untuk Section
function get_section_data($key)
{
    $data = Section::where('post_as', $key)->first();
    if (isset($data)) {
        return $data;
    }
}

// Untuk Data Banner
function get_dataBanner()
{
    $data = DataBanner::all();
    return $data;
}
