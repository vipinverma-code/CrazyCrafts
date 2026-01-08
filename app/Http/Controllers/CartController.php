<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add to cart
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                "id" => $request->id,
                "name" => $request->name,
                "price" => $request->price,
                "image" => $request->image,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Product added to cart');
    }

    // View Cart
    public function view()
    {
        return view('cart');
    }


    public function update(Request $r)
    {
        $cart = session()->get('cart', []);

        foreach ($cart as $key => $item) {

            if ($item['id'] == $r->id) {

                if ($r->action == "plus") {
                    $cart[$key]['quantity'] += 1;
                } elseif ($r->action == "minus" && $cart[$key]['quantity'] > 1) {
                    $cart[$key]['quantity'] -= 1;
                }
            }
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Cart updated');
    }




    // Remove
    public function remove($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return back();
    }
}
