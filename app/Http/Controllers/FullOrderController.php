<?php

namespace App\Http\Controllers;

use App\Models\FullOrder;
use App\Models\SmallOrder;
use Illuminate\Http\Request;

class FullOrderController extends Controller
{
    public function index()
    {
        session([
            'small_orders' => SmallOrder::where('finished', false)->count(),
            'full_orders' => FullOrder::where('finished', false)->count()
        ]);
        $full_orders = FullOrder::where('finished', false)->get();
        return view('full_orders', compact(['full_orders']));
    }

    public function show(FullOrder $full_order) {
        return view('full_order', compact(['full_order']));
    }

    public function form()
    {
        return view('full-form');
    }

    public function create(Request $request)
    {
        FullOrder::create($request->all());

        return redirect(route('success_message'));
    }

    public function finish(FullOrder $full_order)
    {
        $full_order->update(['finished' => true]);
        return redirect()->route('full_order.index');
    }

    public function finishIndex()
    {
        $full_orders = FullOrder::where('finished', true)->get();
        return view('finished_full_orders', compact(['full_orders']));
    }

    public function delete(FullOrder $full_order)
    {
        $full_order->delete();
        return redirect()->back();
    }


}
