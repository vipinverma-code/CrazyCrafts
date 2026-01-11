@extends('layouts.app')

@section('content')

    @php
        $cart = session('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    @endphp

    <div class="container mt-5 mb-5">
        {{-- 
    <h1 class="text-center fw-bold mb-4">Checkout</h1> --}}
        <section class="checkout-header">
            <div class="container text-center">
                <h1>Checkout</h1>
                <p class="sub-text">Complete your order safely & securely</p>
            </div>
        </section>


        @if (!$cart || count($cart) == 0)
            <div class="text-center p-5">
                <h4>Your cart is empty</h4>
                <a href="/shop" class="btn btn-primary mt-2">Go to Shop</a>
            </div>
        @else
            <div class="row">

                {{-- LEFT SIDE SHIPPING FORM --}}
                <div class="col-md-8">

                    <div class="p-4 shadow rounded">

                        <h4 class="fw-bold mb-3">Shipping Details</h4>
                        {{-- Checkout form fields --}}
                        <form action="{{ route('order.place') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="fw-semibold">Full Name</label>
                                <input type="text" required name="name" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold">Email</label>
                                    <input type="email" required name="email" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="fw-semibold">Phone Number</label>
                                    {{-- <input type="text" required name="phone" class="form-control"> --}}
                                    <input type="tel" required name="phone" class="form-control" maxlength="10">

                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="fw-semibold">Shipping Address</label>
                                {{-- <textarea required name="address" rows="4" class="form-control"></textarea> --}}
                                <textarea required name="address" rows="4" class="form-control"
                                    placeholder="House No, Street, City, State, Pincode"></textarea>

                            </div>
                            <div class="mb-4 payment-box">
                                <label class="fw-semibold d-block mb-2">Payment Method</label>

                                <div class="payment-option">
                                    <input type="radio" name="payment_method" value="cod" checked>
                                    <div>
                                        <strong>Cash on Delivery</strong>
                                        <p>Pay in cash when your order is delivered</p>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn w-100" style="background:#b54a24;color:white;font-size:18px">
                                Place Order
                            </button>

                        </form>

                    </div>

                </div>

                {{-- RIGHT SIDE ORDER SUMMARY --}}
                <div class="col-md-4">
                    <div class="summary-card p-4 rounded">

                        <h4 class="fw-bold">Your Order</h4>
                        <hr>

                        @foreach ($cart as $item)
                            <div class="d-flex mb-3">

                                <img src="{{ $item['image'] }}" width="60" style="border-radius:10px;margin-right:10px">

                                <div>
                                    <strong>{{ $item['name'] }}</strong>
                                    <p class="mb-0 text-muted">Qty: {{ $item['quantity'] }}</p>
                                </div>

                                <span class="ms-auto fw-bold">
                                    ₹{{ $item['price'] * $item['quantity'] }}
                                </span>
                            </div>
                        @endforeach

                        <hr>

                        <div class="d-flex justify-content-between">
                            <p>Subtotal</p>
                            <strong>₹{{ $total }}</strong>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p>Shipping</p>
                            <strong class="text-success">Free</strong>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between">
                            <h5>Total</h5>
                            <h5 class="text-danger">₹{{ $total }}</h5>
                        </div>

                    </div>
                </div>

            </div>
        @endif
    </div>

@endsection
