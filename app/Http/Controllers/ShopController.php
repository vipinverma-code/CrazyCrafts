<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class ShopController extends Controller
{
    public function index(Request $r)
    {

        $products = collect(ProductService::products());

        // FILTER
        if ($r->category && $r->category !== "All") {
            $products = $products->where('category', $r->category);
        }

        // SEARCH
        if ($r->search) {
            $products = $products->filter(
                fn($p) =>
                str_contains(strtolower($p['name']), strtolower($r->search))
            );
        }

        $categories = ["All", "Varmala", "Ring Platter", "Wedding Platter", "Rakhi", "Design Art"];

        return view('shop', [
            "products" => $products,
            "categories" => $categories,
            "selected" => $r->category ?? "All",
            "search" => $r->search ?? ""
        ]);
    }

    public function detail($slug)
    {
        $product = collect(ProductService::products())
            ->firstWhere('slug', $slug);

        if (!$product) abort(404);

        return view('product-detail', compact('product'));
    }
}
