@extends('layouts.app')

@section('content')
    {{-- <div class="container text-center mt-5">
        <h1>Our Collection</h1>
        <p>
            Explore our range of handcrafted treasures, from terracotta pottery to handwoven textiles.
        </p>
    </div> --}}
    <div class="shop-hero-section text-center" >
        <h1 class="shop-title">Our Collection</h1>
        <p class="shop-subtitle">
            Explore our range of handcrafted treasures, from terracotta pottery to handwoven textiles.
        </p>
    </div>


    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center filters-wrapper flex-wrap">

            <div>
                @foreach ($categories as $cat)
                    <a href="{{ route('shop', ['category' => $cat]) }}"
                        class="btn {{ $selected == $cat ? 'btn-primary' : 'btn-outline-dark' }} rounded-pill">
                        {{ $cat }}
                    </a>
                @endforeach

                @if ($selected != 'All' || $search != '')
                    <a href="{{ route('shop') }}" class="btn btn-warning rounded-pill ms-2">
                        Clear Filters
                    </a>
                @endif
            </div>

            <form>
                <input type="text" name="search" value="{{ $search }}" placeholder="Search products..."
                    class="form-control rounded-pill shop-search" style="width:300px;">
            </form>

        </div>

        <div class="row mt-4">

            @foreach ($products as $p)
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="{{ $p['image'] }}" class="card-img-top">

                        <div class="card-body">
                            <small>{{ $p['category'] }}</small>
                            <h5>{{ $p['name'] }}</h5>
                            <p>₹{{ $p['price'] }}</p>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('product.detail', $p['slug']) }}" class="btn btn-outline-dark btn-sm">
                                    View
                                </a>


                            </div>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
