<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ViewController extends Controller
{
    private function getProducts()
    {
        $path = storage_path('app/products.json');
        if (!File::exists($path)) {
            return [];
        }
        $json = File::get($path);
        return json_decode($json, true);
    }

    public function home()
    {
        $products = $this->getProducts();
        return view('pages.home', compact('products'));
    }

    public function catalog(Request $request)
    {
        $products = collect($this->getProducts());

        if ($request->has('categories')) {
            $products = $products->whereIn('category', $request->input('categories'));
        }

        if ($request->has('steels')) {
            $steels = $request->input('steels');
            $products = $products->filter(function ($item) use ($steels) {
                return isset($item['specs']['Acero']) && in_array($item['specs']['Acero'], $steels);
            });
        }

        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'price_asc':
                    $products = $products->sortBy('price');
                    break;
                case 'price_desc':
                    $products = $products->sortByDesc('price');
                    break;
                case 'newest':
                    $products = $products->sortByDesc('id');
                    break;
            }
        }

        $products = $products->values()->all();

        return view('pages.catalog', compact('products'));
    }

    public function product($id)
    {
        $products = collect($this->getProducts());
        $product = $products->firstWhere('id', (int)$id);

        if (!$product) {
            abort(404, 'Producto no encontrado');
        }

        return view('pages.product', compact('product'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
