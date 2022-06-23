<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productline;


class ProductController extends Controller
{
    public function productApi($productline)
    {


        $response = [];

        $products = Product::orderBy('id')
            ->where('productLine', $productline)
            ->get();
        foreach ($products as $product) {
            $response[] = [
                'id' => $product->id,
                'productCode' =>  $product->productCode,
                'productName' => $product->productName,
                'productLine' => $product->productLine,
                'productScale' =>  $product->productScale,
                'productVendor' => $product->productVendor,
                'productDescription' => $product->productDescription,
                'quantityInStock' => $product->quantityInStock,
                'buyPrice' => $product->buyPrice,
                'MSRP' => $product->MSRP,
            ];
        }

        return $response;
    }

    // public function search()
    // {
    //     return view('common/search');
    // }
    public function searchApi(Request $request)
    {

        $search_query = $request->input('search');

        $search_result = Product::where('productName', 'like', "%" . $search_query . "%")->get();


        $response = [];
        foreach ($search_result as $product) {
            $response[] = [
                'id' => $product->id,
                'productCode' =>  $product->productCode,
                'productName' => $product->productName,
                'productLine' => $product->productLine,
                'productScale' =>  $product->productScale,
                'productVendor' => $product->productVendor,
                'productDescription' => $product->productDescription,
                'quantityInStock' => $product->quantityInStock,
                'buyPrice' => $product->buyPrice,
                'MSRP' => $product->MSRP,
            ];
        }
        return $response;
    }
}
