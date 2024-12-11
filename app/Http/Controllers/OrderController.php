<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Worker;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['customer', 'worker'])->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $customers = Customer::all();
        $workers = Worker::all();
        return view('orders.create', compact('customers', 'workers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'start_date' => 'required|date',
            'delivery_date' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed',
            'customers_id' => 'required|exists:customers,id',
            'workers_id' => 'required|exists:workers,id',
        ]);

        Order::create($validated);

        return redirect()->route('orders.index');
    }
}
