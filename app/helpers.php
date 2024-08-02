<?php

use App\Models\DataBanner;
use App\Models\Peta;
use App\Models\Section;
use App\Models\Setting;
use App\Models\TanyaJawab;
use App\Models\Webinar;

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

// Untuk Webinar
function get_dataWebinar()
{
    $data = Webinar::all();
    return $data;
}

// Untuk Peta
function get_peta_data($key)
{
    $data = Peta::where('post_as', $key)->first();
    if (isset($data)) {
        return $data;
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

// Untuk FAQ (Tanya Jawab)
function get_dataTanyaJawab()
{
    $data = TanyaJawab::all();
    return $data;
}

// Untuk Data Banner
function get_dataBanner()
{
    $data = DataBanner::all();
    return $data;
}
