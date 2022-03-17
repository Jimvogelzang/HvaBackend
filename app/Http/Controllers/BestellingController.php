<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BestellingController extends Controller
{
    //
    function getData()
    {
        return view('bestelling.blade.php');
    }
}
