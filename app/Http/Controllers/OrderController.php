<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $orderQuery = Order::query();

        if ($search) {
            $orderQuery->where('address', 'LIKE', '%' . $search . '%');
        }

        $orders = $orderQuery->with('orderItem')->paginate(5);
        return view('orders.index', compact('orders', 'search'));
    }


    public function show($id)
    {
        $orderShow = Order::with('orderItem')->findOrFail($id);
        return view('orders.show', compact('orderShow'));
    }

    public function create()
    {

        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->save();
        return redirect()->route('orders.index')->with('success', 'User created successfully!');

    }
}
