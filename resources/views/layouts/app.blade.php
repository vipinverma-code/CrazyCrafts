<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crazy Crafts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --primary: #357185;
            --secondary: rgb(236, 224, 196);
            --accent: rgb(159, 184, 182);
            --dark: #2e2e2e;
        }

        /* GLOBAL */
        body {
            background: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
            padding: 18px;
        }

        /* ---------- HERO SECTION ---------- */
        .hero {
            background: linear-gradient(to right, var(--secondary), white);
            padding: 80px 10px;
            border-radius: 0 0 60px 60px;
        }

        .hero h1 {
            font-size: 55px;
            font-weight: 800;
            color: #222;
        }

        .hero span {
            color: var(--primary);
        }

        .hero p {
            max-width: 550px;
            color: #555;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
        }

        .btn-outline {
            border: 2px solid var(--primary);
            padding: 12px 25px;
            border-radius: 30px;
            color: var(--primary);
        }

        /* ---------- FEATURES SECTION ---------- */
        .features-section {
            padding: 60px 0;
            background: linear-gradient(to bottom, #faf7ef, #ffffff);
        }

        .feature-box {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .08);
            transition: .4s;
            min-height: 200px;
        }

        .feature-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, .15);
        }

        .feature-box i {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .feature-box .fa-star {
            color: #d4af37;
        }

        .feature-box .fa-heart {
            color: #e63946;
        }

        .feature-box .fa-shield-halved {
            color: #2a9d8f;
        }

        .feature-box h4 {
            font-weight: 700;
            margin-bottom: 10px;
            color: #222;
        }

        .feature-box p {
            color: #555;
        }

        /* ---------- FEATURED COLLECTION ---------- */
        .featured-section {
            background: linear-gradient(to right, var(--secondary), white);
            padding: 70px 0;
            border-radius: 40px;
            margin-top: 60px;
        }

        .product-card {
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #ddd;
            transition: .3s;
            height: 100%;
        }

        .product-card:hover {
            transform: scale(1.03);
        }

        .product-card img {
            height: 230px;
            object-fit: cover;
        }

        /* ---------- SHOP HERO ---------- */
        .shop-hero-section {
            background: var(--secondary);
            padding: 70px 0;
            border-radius: 25px;
            width: 85%;
            margin: 30px auto;
        }

        .shop-title {
            font-size: 42px;
            font-weight: 800;
            color: #1f2c2f;
        }

        .shop-subtitle {
            color: #4f4f4f;
            font-size: 17px;
            max-width: 650px;
            margin: 10px auto 0;
        }

        /* ---------- STORY SECTION ---------- */
        .story-section {
            background: var(--primary);
            color: white;
            padding: 80px 0;
            border-radius: 40px;
        }

        /* ---------- FOOTER ---------- */
        .footer {
            background: var(--secondary);
            padding: 40px;
            margin-top: 40px;
        }

        /* =============== PRODUCT DETAIL PAGE =============== */
        .product-detail-wrapper {
            margin-bottom: 60px;
        }

        .back-btn {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .main-product-img {
            width: 100%;
            max-width: 420px;
            border-radius: 20px;
        }

        .thumb-row {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .thumb-img {
            width: 90px;
            height: 90px;
            border-radius: 15px;
            object-fit: cover;
        }

        .product-info .category {
            color: gray;
        }

        .product-name {
            font-size: 32px;
            font-weight: 800;
        }

        .price-section h3 {
            display: inline;
            color: #222;
        }

        .desc {
            color: #555;
        }

        .qty-btn-detail,
        .qty-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            border: none;
            font-size: 18px;
        }

        .qty-input-detail,
        .qty-input {
            width: 45px;
            text-align: center;
            font-size: 18px;
            border: none;
            background: #eee;
            border-radius: 10px;
        }

        .add-cart-btn {
            margin-top: 10px;
            padding: 12px 25px;
            border-radius: 30px;
        }

        /* INFO CARDS */
        .info-card {
            background: var(--secondary);
            padding: 25px;
            border-radius: 25px;
            text-align: center;
            transition: .3s;
        }

        .info-card i {
            font-size: 32px;
            color: var(--primary);
            margin-bottom: 8px;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, .1);
        }

        /* =============== CART PAGE =============== */
        .cart-item-card {
            background: #fff;
            padding: 15px;
            border-radius: 20px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
        }

        .cart-img {
            width: 100%;
            border-radius: 15px;
            height: 110px;
            object-fit: cover;
        }

        .summary-card {
            background: var(--secondary);
            padding: 20px;
            border-radius: 25px;
        }

        /* ---------- RESPONSIVE ---------- */
        @media(max-width:992px) {
            .hero {
                padding: 50px 20px;
                border-radius: 0 0 40px 40px;
                text-align: center;
            }

            .hero h1 {
                font-size: 34px;
                line-height: 40px;
            }

            .hero img {
                width: 100%;
                margin-top: 20px;
                border-radius: 20px;
            }

            .features-section {
                padding: 50px 10px;
                margin-top: 40px;
            }

            .featured-section {
                width: 95%;
                padding: 50px 10px;
                border-radius: 25px;
            }

            .product-card img {
                height: 200px;
            }
        }

        /* SMALL DEVICES */
        @media(max-width:768px) {
            .shop-hero-section {
                width: 95%;
                padding: 40px 15px;
                border-radius: 20px;
            }

            .shop-title {
                font-size: 30px;
            }

            .shop-subtitle {
                font-size: 14px;
            }

            .product-detail-wrapper {
                margin-top: 30px;
            }

            .main-product-img {
                max-width: 300px;
            }

            .thumb-img {
                width: 70px;
                height: 70px;
            }

            .product-name {
                font-size: 24px;
            }

            .summary-card {
                margin-top: 15px;
            }

            .cart-img {
                height: 90px;
            }
        }

        /* EXTRA SMALL */
        @media(max-width:576px) {
            .hero h1 {
                font-size: 28px;
            }

            .btn {
                width: 100%;
                margin-bottom: 8px;
            }

            .product-card img {
                height: 160px;
            }
        }

        /* Whatsapp chat feature  css  */
        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            z-index: 9999;
        }

        /* Need Help Badge */
        .help-badge {
            background: #fff;
            padding: 10px 18px;
            border-radius: 30px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, .15);
            font-weight: 600;
            color: #222;
            transition: .3s;
            white-space: nowrap;
        }

        /* WhatsApp Circle */
        .wa-circle {
            width: 65px;
            height: 65px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 35px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
            transition: .3s;
        }

        .wa-circle:hover {
            transform: scale(1.08);
        }

        /* Tooltip */
        .wa-tooltip {
            position: absolute;
            right: 78px;
            top: 38%;
            transform: translateY(-50%);
            background: #0b132b;
            color: #fff;
            padding: 10px 15px;
            border-radius: 25px;
            font-size: 14px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: .3s ease;
        }

        /* Hover Logic — ONLY icon par popup */
        .wa-circle:hover~.help-badge {
            transform: translateX(-4px);
        }

        .wa-circle:hover+.wa-tooltip {
            opacity: 1;
            transform: translateY(-50%);
        }

        /* ---------- RESPONSIVE ---------- */

        /* Tablet */
        @media(max-width:992px) {
            .help-badge {
                font-size: 14px;
                padding: 8px 14px;
            }

            .wa-circle {
                width: 60px;
                height: 60px;
                font-size: 30px;
            }
        }

        /* Mobile */
        @media(max-width:768px) {
            .whatsapp-float {
                right: 15px;
                bottom: 20px;
            }

            .help-badge {
                display: none;
            }

            .wa-circle {
                width: 58px;
                height: 58px;
                font-size: 28px;
            }

            .wa-tooltip {
                display: none;
                /* mobile me hover hota hi nahi */
            }
        }

        /* Very Small Phones */
        @media(max-width:450px) {
            .wa-circle {
                width: 55px;
                height: 55px;
                font-size: 26px;
            }
        }

        /* checkout style */
        .checkout-header {
            background: linear-gradient(to right, #f8f3e6, #ffffff);
            padding: 60px 0;
            border-radius: 0 0 40px 40px;
            margin-bottom: 40px;
        }

        .checkout-header h1 {
            font-weight: 800;
            font-size: 42px;
            color: #1f2c2f;
        }

        .checkout-header .sub-text {
            color: #555;
            font-size: 16px;
            margin-top: 5px;
        }
    </style>

</head>

<body>


    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <h3 class="fw-bold" style="color:var(--primary)">Crazy Crafts</h3>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-center">

                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/shop" class="nav-link">Shop</a></li>
                    <li class="nav-item"><a href="/our-story" class="nav-link">Our Story</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>


                    <li class="nav-item ms-3">
                        <a href="/cart" class="btn position-relative"
                            style="background:var(--primary);color:white;border-radius:50px;">

                            <i class="fa-solid fa-cart-shopping"></i>

                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ session('cart') ? collect(session('cart'))->sum('quantity') : 0 }}
                            </span>

                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="footer text-center">
        <h4 style="color:var(--primary)">Crazy Crafts</h4>
        <p>Premium Craft Materials | Made with Creativity</p>

        <div class="d-flex justify-content-center gap-4">

            <a href="https://instagram.com" target="_blank">
                <i class="fa-brands fa-instagram fa-2x" style="color:var(--primary)"></i>
            </a>

            <a href="https://facebook.com" target="_blank">
                <i class="fa-brands fa-facebook fa-2x" style="color:var(--primary)"></i>
            </a>

            <a href="https://linkedin.com" target="_blank">
                <i class="fa-brands fa-linkedin fa-2x" style="color:var(--primary)"></i>
            </a>

            <a href="https://twitter.com" target="_blank">
                <i class="fa-brands fa-twitter fa-2x" style="color:var(--primary)"></i>
            </a>

        </div>

        <p class="mt-3">© 2026 Crazy Crafts. All Rights Reserved.</p>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @if (session('success'))
        <div class="alert alert-success position-fixed bottom-0 end-0 m-3">
            {{ session('success') }}
        </div>
    @endif

    <a href="https://wa.me/9721851467?text=Hi%20I%20need%20help%20regarding%20Crazy%20Crafts%20Products"
        class="whatsapp-float" target="_blank">

        <div class="help-badge">
            Need Help?
        </div>

        <div class="wa-circle">
            <i class="fa-brands fa-whatsapp"></i>
        </div>

        <div class="wa-tooltip">
            Chat with us on WhatsApp
        </div>

    </a>



</body>

</html>
