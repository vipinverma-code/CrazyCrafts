{{-- @extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="story-hero">
    <div class="container text-center">
        <h1>Our Story</h1>
        <p>Bridging the gap between traditional artisans and modern homes.</p>
    </div>
</section>

<!-- STORY CONTENT -->
<section class="story-content">
    <div class="container">

        <blockquote class="story-quote">
            “Art is not what you see, but what you make others see.”
        </blockquote>

        <div class="story-text">
            <p>
                Crazy Crafts began with a simple journey through the rural villages of Rajasthan and Gujarat.
                We saw incredible talent—potters turning clay into gold, weavers creating visual poetry on looms,
                and jewelers crafting intricate designs from memory.
            </p>

            <p>
                However, we also saw a struggle. These master artisans were losing their livelihoods to
                mass-produced factory goods. Their art was undervalued, and the younger generation
                was moving away from their heritage.
            </p>
        </div>

        <!-- IMAGE CARDS -->
        <div class="story-images">
            <div class="story-card">
                <img src="/images/potter.jpg" alt="Potter hands">
                <span>Pottery Craft</span>
            </div>

            <div class="story-card">
                <img src="/images/textiles.jpg" alt="Textiles">
                <span>Handwoven Textiles</span>
            </div>
        </div>

        <!-- MISSION -->
        <div class="mission-section">
            <h2>Our Mission</h2>

            <p>
                We founded Crazy Crafts to be the bridge. We work directly with artisan families,
                ensuring fair trade prices that honor their skill and time.
                We help them adapt their traditional designs for modern aesthetics
                without losing the soul of the craft.
            </p>

            <p>
                When you buy from Kriti Crafts, you're not just buying a product.
                You're preserving a legacy. You're keeping a kiln fire burning.
                You're supporting a family. You're bringing a piece of authentic
                Indian soul into your home.
            </p>
        </div>

    </div>
</section>

@endsection --}}
@extends('layouts.app')

@section('content')
    <!-- ===== Our Story Section ===== -->
    <section class="our-story">
        <div class="container text-center">
            <h1>Our Story</h1>
            <p class="subtitle">
                Bridging tradition with emotion — Crafted by Heart ❤️

                Every creation tells a story of heritage, love, and human touch.
            </p>
        </div>
    </section>

    <!-- ===== Story Content ===== -->
    <section class="story-content">
        <div class="container">
            <div class="row align-items-center gy-4">

                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/about/art.jpeg') }}" class="img-fluid rounded shadow"
                        alt="Handcrafted artisan work">
                </div>

                <div class="col-lg-6">
                    <p class="quote">
                        “Art is not what you see, but what you make others feel.”
                    </p>

                    <p>
                        Crafted by Heart was born from a deep respect for handmade artistry
                        and the people behind it. Our journey began in quiet workshops where
                        skilled hands transform raw materials into meaningful creations.
                    </p>

                    <p>
                        In a world of mass production, we choose authenticity. Every piece
                        we offer carries emotion, heritage, and the warmth of human touch.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== Mission Section ===== -->
    <section class="our-mission">
        <div class="container">
            <div class="row align-items-center gy-4">

                <div class="col-lg-6 order-lg-2">
                    <img src="{{ asset('assets/images/about/mission.png') }}" class="img-fluid rounded shadow" 
                        alt="Indian artisan mission">
                </div>

                <div class="col-lg-6 order-lg-1">
                    <h2>Our Mission</h2>

                    <p>
                        At <strong>Crafted by Heart</strong>, our mission is to preserve authenticity while empowering
                        creativity
                        through meaningful, handcrafted creations. We are committed to keeping traditional artistry alive
                        in a world driven by mass production.
                    </p>

                    <p>
                        We work closely with skilled artisan communities, ensuring fair practices, ethical sourcing,
                        and deep respect for the hands that create each piece. Every product reflects patience,
                        heritage, and the soul of craftsmanship passed down through generations.
                    </p>

                    <p>
                        When you choose <strong>Crafted by Heart</strong>, you’re not just purchasing a product —
                        you’re supporting livelihoods, sustaining cultural legacies, and welcoming warmth,
                        emotion, and human connection into your space.
                    </p>

                </div>

            </div>
        </div>
    </section>
@endsection
