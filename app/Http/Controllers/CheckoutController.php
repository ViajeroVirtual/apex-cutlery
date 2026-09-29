<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    private function getProducts()
    {
        $json = file_get_contents(storage_path('app/products.json'));
        return json_decode($json, true);
    }

    public function cart($id)
    {
        $products = collect($this->getProducts());
        $product = $products->firstWhere('id', (int)$id);
        if (!$product) abort(404);
        
        return view('pages.checkout.cart', compact('product'));
    }

    public function payment()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) return redirect()->route('cart.view');

        $products = collect($this->getProducts());
        $total = 0;
        foreach ($cart as $id => $quantity) {
            $product = $products->firstWhere('id', (int)$id);
            if ($product) $total += $product['price'] * $quantity;
        }
        
        return view('pages.checkout.payment', compact('total'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'card' => 'required'
        ]);

        return redirect()->route('checkout.success');
    }

    public function success()
    {
        session()->forget('cart');
        return view('pages.checkout.success');
    }
}
