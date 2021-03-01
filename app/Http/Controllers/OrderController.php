<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public function index($productId) {
        $product = Product::find($productId);
        return view('order', compact('product'));
    }

    public function save($productId, Request $request)
    {
            $this->validate($request, [
                'client_name' => 'required',
                'client_address' => 'required',
                'shipping' => 'required'
            ]);


        Order::create([
            'total_product_value' => Product::find($productId)->price,
            'total_shipping_value' => $request->shipping,
            'client_name' => $request->client_name,
            'client_address' => $request->client_address,
        ]);
        return back()->with('success', 'Your order has been submitted.');
    }
}
