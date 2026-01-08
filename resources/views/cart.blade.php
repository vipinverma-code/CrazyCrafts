@extends('layouts.app')

@section('content')

    <div class="container mt-5 mb-5">

        <h2 class="fw-bold mb-4">Your Cart</h2>

        @php
            $cart = session('cart', []);
            $total = 0;
        @endphp

        @if (!$cart || count($cart) == 0)
            <div class="text-center p-5">
                <h4>Your cart is empty</h4>
                <a href="/shop" class="btn btn-primary mt-3">Continue Shopping</a>
            </div>
        @else
            <div class="row">

                <!-- LEFT SIDE CART ITEMS -->
                <div class="col-md-8">

                    @foreach ($cart as $item)
                        @php
                            $total += $item['price'] * $item['quantity'];
                        @endphp

                        <div class="cart-item-card">

                            <div class="row align-items-center">

                                <div class="col-3 text-center">
                                    <img src="{{ $item['image'] }}" class="cart-img">
                                </div>

                                <div class="col-5">
                                    <h5>{{ $item['name'] }}</h5>
                                    <p class="text-muted">₹{{ $item['price'] }}</p>

                                </div>


                                <div class="col-2 text-center">

                                    <div class="qty-box d-flex justify-content-center">

                                        <form action="{{ route('cart.update') }}" method="POST"
                                            class="d-flex align-items-center">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item['id'] }}">

                                            <button type="submit" name="action" value="minus" class="qty-btn">-</button>

                                            <input type="text" readonly value="{{ $item['quantity'] }}"
                                                class="qty-input mx-2">

                                            <button type="submit" name="action" value="plus" class="qty-btn">+</button>

                                        </form>

                                    </div>


                                </div>


                                <div class="col-2 text-center">
                                    <a href="{{ route('cart.remove', $item['id']) }}" class="btn btn-danger btn-sm">
                                        Remove
                                    </a>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>


                <!-- RIGHT SIDE SUMMARY -->
                <div class="col-md-4">

                    <div class="summary-card">

                        <h4>Order Summary</h4>

                        <hr>

                        <div class="d-flex justify-content-between">
                            <p>Subtotal</p>
                            <strong>₹{{ $total }}</strong>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p>Shipping</p>
                            <strong>Free</strong>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between">
                            <h5>Total</h5>
                            <h5>₹{{ $total }}</h5>
                        </div>

                        <a href="/checkout" class="btn btn-primary w-100 mt-3">
                            Proceed to Checkout
                        </a>

                    </div>

                </div>

            </div>
        @endif

    </div>

@endsection
