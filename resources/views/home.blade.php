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
                <button class="btn btn-outline mt-2">Our Story</button>

            </div>

            <div class="col-md-6 text-center">
                <img src="https://images.pexels.com/photos/279953/pexels-photo-279953.jpeg"
                    style="width:90%;border-radius:25px;">
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


    {{-- Featured Collection --}}

    <div class="featured-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold">Featured Collection</h2>
                <a href="{{ route('shop') }}" class="view-all-btn">
                    View All →
                </a>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Decor Craft Set</h5>
                            <p>₹850</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="https://images.pexels.com/photos/3186654/pexels-photo-3186654.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Art Box</h5>
                            <p>₹1200</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <img src="https://images.pexels.com/photos/1561020/pexels-photo-1561020.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Craft Basket</h5>
                            <p>₹1500</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- Story Section --}}
    {{-- <div class="story-wrapper">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/2736834/pexels-photo-2736834.jpeg" class="story-img">
                </div>

                <div class="col-md-6 text-white">
                    <h2>Preserving Art & Creativity</h2>

                    <p>
                        Crazy Crafts supports creativity and passion.
                        Our craft materials help creators bring imagination to life 🎨
                    </p>

                    <button class="btn btn-light px-4 py-2 rounded-pill">
                        Read Our Story
                    </button>

                </div>

            </div>

        </div>
    </div> --}}


    <div class="container story-section mt-5">
        <div class="row align-items-center">

            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/2736834/pexels-photo-2736834.jpeg"
                    style="width:90%;border-radius:25px;">
            </div>

            <div class="col-md-6">
                <h2>Preserving Art & Creativity</h2>
                <p>
                    Crazy Crafts supports creativity and passion.
                    Our products help creators bring imagination to life 🎨
                </p>

                <button class="btn btn-light">Read Our Story</button>
            </div>

        </div>
    </div>
@endsection
