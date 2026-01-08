@extends('layouts.app')
@section('content')
    <div class="container mt-5 product-detail-wrapper">

        <a href="{{ route('shop') }}" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i> Back to shop
        </a>

        <div class="row mt-3">

            <!-- LEFT IMAGE SIDE -->
            <div class="col-md-6 text-center">
                <img src="{{ $product['image'] }}" class="main-product-img">

                <div class="thumb-row mt-3">
                    <img src="{{ $product['image'] }}" class="thumb-img">
                    <img src="{{ $product['image'] }}" class="thumb-img">
                    <img src="{{ $product['image'] }}" class="thumb-img">
                </div>
            </div>

            <!-- RIGHT DETAILS -->
            <div class="col-md-6 product-info">

                <small class="category">{{ $product['category'] }}</small>

                <h2 class="product-name">{{ $product['name'] }}</h2>

                <div class="price-section">
                    <h3>₹{{ $product['price'] }}</h3>
                    <span class="badge bg-success ms-2">In Stock</span>
                </div>

                <p class="desc">
                    Beautiful handcrafted product perfect for home decor
                    and a great addition to your creative collection.
                </p>

                <p class="desc">
                    Made with premium quality materials to ensure durability
                    and aesthetics together.
                </p>

                <!-- QUANTITY -->
                {{-- <div class="qty-box">
                    <button class="qty-btn">-</button>
                    <input value="1" class="qty-input">
                    <button class="qty-btn">+</button>
                </div> --}}
                <div class="d-flex align-items-center">

                    <form action="{{ route('cart.update') }}" method="POST" class="d-flex">
                        @csrf

                        <input type="hidden" name="id" value="{{ $product['id'] }}">

                        <button type="submit" name="action" value="minus" class="qty-btn-detail">-</button>
                        @php
                            $cart = session('cart', []);
                            $quantity = isset($cart[$product['id']]) ? $cart[$product['id']]['quantity'] : 1;
                        @endphp

                        <input readonly value="{{ $quantity ?? 1 }}" class="qty-input-detail">

                        <button type="submit" name="action" value="plus" class="qty-btn-detail">+</button>

                    </form>



                </div>




                <!-- ADD TO CART -->
                {{-- <form method="post" action="{{ route('cart.add') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                    <button class="btn btn-primary add-cart-btn">
                        <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                    </button>
                </form> --}}
                <form method="post" action="{{ route('cart.add') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                    <input type="hidden" name="name" value="{{ $product['name'] }}">
                    <input type="hidden" name="price" value="{{ $product['price'] }}">
                    <input type="hidden" name="image" value="{{ $product['image'] }}">
                    <button class="btn btn-primary">
                        Add to Cart
                    </button>
                </form>


                <!-- INFO BADGES -->

                <div class="row mt-4">

                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <i class="fa-solid fa-truck"></i>
                            <h5>Free Shipping</h5>
                            <p>On all orders above ₹999</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <i class="fa-solid fa-shield-halved"></i>
                            <h5>Quality Guaranteed</h5>
                            <p>Premium handcrafted quality</p>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>
@endsection
