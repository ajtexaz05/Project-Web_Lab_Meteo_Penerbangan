<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
    function index()
    {
        return view("Peta/index");
    }
}
