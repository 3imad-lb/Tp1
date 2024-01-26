<?php

// ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = session('products', []);

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = $this->getProductById($id);

        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string',
            'marque' => 'required',
            'prix' => 'required|numeric',
            'stock' => 'required|integer|between:1,9999',
            'image' => 'nullable|file',
        ]);

        $product = $request->only(['libelle', 'marque', 'prix', 'stock', 'image']);

        $products = session('products', []);
        $products[] = $product;

        session(['products' => $products]);

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = $this->getProductById($id);

    return view('products.edit', compact('product', 'id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required|string',
            'marque' => 'required',
            'prix' => 'required|numeric',
            'stock' => 'required|integer|between:1,9999',
            'image' => 'nullable|file',
        ]);

        $product = $request->only(['libelle', 'marque', 'prix', 'stock', 'image']);

        $products = session('products', []);
        $products[$id] = $product;

        session(['products' => $products]);

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $products = session('products', []);
        unset($products[$id]);
        session(['products' => $products]);

        return redirect()->route('products.index');
    }

    private function getProductById($id)
    {
        $products = session('products', []);

        return $products[$id] ?? null;
    }
}
