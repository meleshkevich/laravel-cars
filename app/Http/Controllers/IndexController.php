<?php

namespace App\Http\Controllers;

use App\Models\Productline;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Productline::orderBy('productLine')
            ->get();

        $products = Product::orderBy('id')
            ->where('productLine', 'Classic Cars')
            ->get();

        return view('index', compact('categories', 'products'));
    }
}
