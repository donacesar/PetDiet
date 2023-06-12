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

    public function show(FullOrder $full_order)
    {
        return view('full_order', compact(['full_order']));
    }

    public function form()
    {
        return view('full-form');
    }

    public function create(Request $request)
    {
        $request->offsetSet('phone', phoneFilter($request->phone));
        $order = FullOrder::create($request->all());

        $phone = $order->favorite_phone == 1 ? "по телефону\n" : "";
        $email = $order->favorite_email == 1 ? "по email\n" : "";
        $whatsapp = $order->favorite_whatsapp == 1 ? "по [whatsapp](https://wa.me/" . clearPhone($order->phone) . ")\n" : "";
        $telegram = $order->favorite_telegram == 1 ? "по [telegram](https://t.me/%2b" . clearPhone($order->phone) . ")\n" : "";

        $message = "[Расширенная заявка: №$order->id](" . route('full_order.show', $order) .")\n_"
        . $order->name . "_\n"
        . "[%2b$order->phone](" . route('phone_call', $order->phone) . ")" . "\n"
        . $order->email . "\n"
        . "Связь: \n" . $phone . $email . $whatsapp . $telegram;

        sendMessage($message);

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
