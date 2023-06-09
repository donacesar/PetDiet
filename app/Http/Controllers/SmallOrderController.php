<?php

namespace App\Http\Controllers;

use App\Models\FullOrder;
use App\Models\SmallOrder;
use Illuminate\Http\Request;

class SmallOrderController extends Controller
{
    public function index()
    {

        session([
            'small_orders' => SmallOrder::where('finished', false)->count(),
            'full_orders' => FullOrder::where('finished', false)->count()
            ]);

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
        $order = $request->all();
        $message = "Малая заявка: \n" . $order['name'] . "\n" . $order['phone'] . "\n" . $order['email'];
        sendMessage($message);

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
