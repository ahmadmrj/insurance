<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function certificates()
    {
        return view("certificates");
    }

    public function truckingQuickQuote()
    {
        return view("truckingQuickQuote");
    }
}
