
@extends('layouts.app')

@section('content')
    <div class="hero">
        <div class="container row align-items-center">

            <div class="col-md-6">
                <h1>
                    Handcrafted with <span>Soul & Tradition</span>
                </h1>
                <p>
                    Unique handmade craft materials for creativity lovers.
                    Premium quality crafting products made with love ❤️
                </p>

                <a href="{{ route('shop') }}" class="btn btn-primary mt-2">
                    Shop Collection
                </a>
                <a href="{{ route('our.story') }}" class="btn btn-outline mt-2">
                    Our Story
                </a>

            </div>

            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/about/mission.png') }}"
                    style="width:100%;border-radius:25px;">
            </div>
        </div>
    </div>

    {{-- Featured Section --}}
    <div class="features-section">
        <div class="container text-center">
            <div class="row align items-stretch">

                <div class="col-md-4 mb-4 d-flex">
                    <div class="feature-box w-100">
                        <i class="fa-solid fa-star"></i>
                        <h4>Authentic Quality</h4>
                        <p>Premium handmade craft materials crafted with care.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fa-solid fa-heart"></i>
                        <h4>Made with Love</h4>
                        <p>Every product is designed to inspire creativity.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h4>Trusted Brand</h4>
                        <p>Reliable quality with customer satisfaction.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


   {{-- Fearured Collection --}}
    <div class="featured-section">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold">Featured Collection</h2>
            <a href="{{ route('shop') }}" class="view-all-btn">
                View All →
            </a>
        </div>

        <div class="row justify-content-center">

            @foreach($featuredProducts as $product)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card product-card h-100">

                        <img src="{{ asset($product['image']) }}"
                             class="card-img-top"
                             alt="{{ $product['name'] }}">

                        <div class="card-body text-center">
                            <h5 class="mb-1">{{ $product['name'] }}</h5>
                            <p class="text-muted mb-1">{{ $product['category'] }}</p>
                            <p class="fw-bold">₹{{ $product['price'] }}</p>

                            <a href="{{ route('product.detail', $product['slug']) }}"
                               class="stretched-link"></a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>


    {{-- Story Section --}}
    


    <div class="container our-story mt-5">
        <div class="row align-items-center">

            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/2736834/pexels-photo-2736834.jpeg"
                    style="width:90%;border-radius:25px;">
            </div>

            <div class="col-md-6">
                <h2>Preserving Art & Creativity</h2>
                <p>
                    <strong>Crafted by Heart</strong> celebrates the beauty of handmade artistry and timeless creativity.
                    <br>
                       Every creation is thoughtfully designed to preserve emotions, traditions, and meaningful moments.
                    We empower artisans and creators to transform imagination into soulful masterpieces,
                    crafted with love, authenticity, and the warmth of human touch 🤍
                </p>
                <a href="{{ route('our.story') }}" class="btn btn-light">
                    Read Our Story
                </a>


            </div>

        </div>
    </div>
@endsection
