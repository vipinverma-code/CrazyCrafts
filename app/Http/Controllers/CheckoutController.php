<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\Mail\CustomerOrderMail;

class CheckoutController extends Controller
{
   
    public function placeOrder(Request $r)
    {
        // CART TOTAL NIKALO
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $orderData = [
            'order_id' => 'ORD-' . date('Ymd') . '-' . rand(1000, 9999),
            'name' => $r->name,
            'email' => $r->email,
            'phone' => $r->phone,
            'address' => $r->address,
            'total' => $total,
            'items' => $cart // 🔥 IMPORTANT — yahi solve karta hai
        ];

        Mail::to("vipinverma4224@gmail.com")->send(new OrderMail($orderData));
        Mail::to($r->email)->send(new CustomerOrderMail($orderData));

        session()->forget('cart');

        return redirect('/order-success')->with('success', 'Order Placed Successfully');
    }
}
