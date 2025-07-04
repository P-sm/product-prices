<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiPricesRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Currency;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function prices(Request $request)
    {
        $products = Product::select(
            'products.id',
            'products.title',
            'products.price',
            'currencies.format',
            'currencies.rate',
        )
        ->join('currencies', 'currencies.code', '=',DB::raw("'".$request->currency."'"))
        ->get();

        return ProductResource::collection($products);
    }
}