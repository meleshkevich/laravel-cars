<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_page()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $product = new Product;

        $product->productCode = $request->input('productCode');
        $product->productName = $request->input('productName');
        $product->productLine = $request->input('productLine');
        $product->productScale = $request->input('productScale');
        $product->productVendor = $request->input('productVendor');
        $product->productDescription = $request->input('productDescription');
        $product->quantityInStock = $request->input('quantityInStock');
        $product->buyPrice = $request->input('buyPrice');
        $product->MSRP = $request->input('MSRP');


        $product->save();

        session()->flash('success_message', 'New product added!');
        return redirect(url('product/' . $product->id));
    }

    public function show($id)
    {
        $product = Product::orderBy('productCode')
            ->where('id', $id)
            ->get();

        return view('product/details', ['product' => $product[0]]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->productCode = $request->input('productCode');
        $product->productName = $request->input('productName');
        $product->productLine = $request->input('productLine');
        $product->productScale = $request->input('productScale');
        $product->productVendor = $request->input('productVendor');
        $product->productDescription = $request->input('productDescription');
        $product->quantityInStock = $request->input('quantityInStock');
        $product->buyPrice = $request->input('buyPrice');
        $product->MSRP = $request->input('MSRP');
        $product->save();

        session()->flash('success_message', 'Product was succesfuly edited!');

        return redirect(url('/product/' . $product->id));
    }
}
