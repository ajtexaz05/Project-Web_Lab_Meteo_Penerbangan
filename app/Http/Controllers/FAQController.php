<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    function index()
    {
        return view("FAQ/index");
    }
}
