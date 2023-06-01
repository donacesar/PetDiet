<?php

namespace App\Http\Controllers;

use App\Models\SmallOrder;
use Illuminate\Http\Request;

class SmallFormController extends Controller
{
    public function index()
    {
        return view('small-form');
    }

    public function create(Request $request)
    {
        SmallOrder::create($request->all());

        return redirect(route('success_message'));
    }
}
