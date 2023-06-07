<?php

namespace App\Http\Controllers;

use App\Models\FullOrder;
use Illuminate\Http\Request;

class FullOrderController extends Controller
{
    public function index()
    {

        $full_orders = FullOrder::where('finished', false)->get();
        return view('full_orders', compact(['full_orders']));


    }

    public function form()
    {
        return view('full-form');
    }

    public function create(Request $request)
    {
        dd($request->all());
        FullOrder::create($request->all());

        return redirect(route('success_message'));
    }

    public function finish(FullOrder $fullOrder)
    {
        $fullOrder->update(['finished' => true]);
        return redirect()->route('full_order.index');
    }

    public function finishIndex()
    {
        $full_orders = FullOrder::where('finished', false)->get();
        $finished_full_orders = FullOrder::where('finished', true)->get();
        return view('finished_full_orders', compact(['full_orders', 'finished_full_orders']));
    }

    public function delete(FullOrder $fullOrder)
    {
        $fullOrder->delete();
        return redirect()->back();
    }


}
