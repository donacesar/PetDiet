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
        $request->offsetSet('phone', phoneFilter($request->phone));
        $order = SmallOrder::create($request->all());


        $connection = '';
        if ($order->favorite_connection == 1) $connection = 'Звонить по телефону';
        if ($order->favorite_connection == 2) $connection = 'Писать на email';
        if ($order->favorite_connection == 3) $connection = "связь по [whatsapp](https://wa.me/" . clearPhone($order->phone) . ")";
        if ($order->favorite_connection == 4) $connection = "связь по [telegram](https://t.me/%2b" . clearPhone($order->phone) . ")";


        $message = "Малая заявка: \n_"
            . $order->name . "_\n"
            . "[%2b$order->phone](" . route('phone_call', $order->phone) . ")" . "\n"
            . $order->email . "\n_"
            . $order->orderService->category . "_\n"
            . $connection;
        sendMessage($message);

        return redirect(route('success_message'));
    }

    public function finish(SmallOrder $smallOrder)
    {
        $smallOrder->update(['finished' => true]);
        return redirect()->route('small_order.index');
    }

    public function finishIndex()
    {
        $small_orders = SmallOrder::where('finished', false)->get();
        $finished_small_orders = SmallOrder::where('finished', true)->get();
        return view('finished_small_orders', compact(['small_orders', 'finished_small_orders']));
    }

    public function delete(SmallOrder $smallOrder)
    {
        $smallOrder->delete();
        return redirect()->back();
    }
}
