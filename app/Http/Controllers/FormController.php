<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __invoke($attr)
    {
        return view('small-form', compact('attr'));
    }
}
