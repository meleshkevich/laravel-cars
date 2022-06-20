<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        $product = Product::orderBy('productCode')
            ->where('id', $id)
            ->get();

        return view('product.details', ['product' => $product[0]]);
    }
}
