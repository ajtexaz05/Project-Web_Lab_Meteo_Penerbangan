<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebinarController extends Controller
{
    // index
    function index()
    {
        return view("Webinar/index");
    }
}
