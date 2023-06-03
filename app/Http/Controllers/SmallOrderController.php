<?php

namespace App\Http\Controllers;

use App\Models\SmallOrder;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestSize\Small;

class SmallOrderController extends Controller
{
    public function index()
    {

        $small_orders = SmallOrder::where('finished', false)->get();
        return view('small_orders', compact(['small_orders']));


    }

    public function form()
    {
        return view('small-form');
    }

    public function create(Request $request)
    {
        SmallOrder::create($request->all());

        return redirect(route('success_message'));
    }

    public function finish(SmallOrder $smallOrder) {
        $smallOrder->update(['finished' => true]);
        return redirect()->route('small_order.index');
    }

    public function finishIndex()
    {
        $small_orders = SmallOrder::where('finished', false)->get();
        $finished_small_orders = SmallOrder::where('finished', true)->get();
        return view('finished_small_orders', compact(['small_orders', 'finished_small_orders']));
    }
    public function delete(SmallOrder $smallOrder) {
        $smallOrder->delete();
        return redirect()->back();
    }
}
