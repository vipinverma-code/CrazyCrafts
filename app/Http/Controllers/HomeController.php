<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class HomeController extends Controller
{
    public function index()
    {
        $products = collect(ProductService::products());

        // FEATURED PRODUCTS (6 only)
        $featuredProducts = $products->shuffle()->take(6);

        return view('home', compact('featuredProducts'));
    }
}
