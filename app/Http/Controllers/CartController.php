<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    private function getProducts()
    {
        $json = file_get_contents(storage_path('app/products.json'));
        return collect(json_decode($json, true));
    }

    public function view(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $products = $this->getProducts();
        
        $cartItems = [];
        $total = 0;

        foreach ($cart as $id => $quantity) {
            $product = $products->firstWhere('id', (int)$id);
            if ($product) {
                $product['quantity'] = $quantity;
                $cartItems[] = $product;
                $total += $product['price'] * $quantity;
            }
        }

        return view('pages.checkout.cart', compact('cartItems', 'total'));
    }

    public function add(Request $request, $id)
    {
        $products = $this->getProducts();
        $product = $products->firstWhere('id', (int)$id);
        
        if (!$product) abort(404);

        $cart = $request->session()->get('cart', []);
        $qty = (int) $request->input('quantity', 1);
        
        if (isset($cart[$id])) {
            $cart[$id] += $qty;
        } else {
            $cart[$id] = $qty;
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Producto añadido al carrito');
    }

    public function remove(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);
        
        if (isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('cart.view');
    }
}
