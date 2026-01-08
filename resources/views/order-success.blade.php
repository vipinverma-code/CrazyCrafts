@extends('layouts.app')

@section('content')
    <style>
        .success-wrapper {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-box {
            text-align: center;
            padding: 60px 30px;
            background: #fff;
            border-radius: 30px;
            width: 95%;
            max-width: 750px;
            margin: auto;
        }

        .success-icon {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: #d5ffe7;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            color: #25D366;
            font-size: 45px;
        }

        .success-title {
            font-size: 36px;
            font-weight: 800;
            margin-top: 25px;
        }

        .success-text {
            color: #555;
            margin-top: 10px;
            font-size: 17px;
        }

        .order-info {
            background: #f6f1e2;
            padding: 18px 25px;
            border-radius: 20px;
            text-align: left;
            margin-top: 25px;
        }

        .order-info p {
            margin: 6px 0;
            font-size: 15px;
        }

        .btn-main {
            background: #9b4a28;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
            margin-right: 10px;
        }

        .btn-outline {
            border: 2px solid #222;
            padding: 12px 30px;
            border-radius: 30px;
            background: white;
            color: #222;
        }

        @media(max-width:768px) {
            .success-title {
                font-size: 26px;
            }

            .success-box {
                padding: 40px 15px;
            }
        }
    </style>


    <div class="container success-wrapper">

        <div class="success-box">

            <div class="success-icon">
                <i class="fa-solid fa-check"></i>
            </div>

            <h2 class="success-title">
                Order Placed Successfully!
            </h2>

            <p class="success-text">
                Thank you for supporting our artisans. Your order has been received.
            </p>

            {{--  Dynamic Order Details Example --}}
            {{-- <div class="order-info">
                <p><strong>Order ID:</strong> {{ session('order_id') ?? 'ORD123456' }}</p>
                <p><strong>Customer:</strong> {{ session('customer_name') ?? 'John Doe' }}</p>
                <p><strong>Total Amount:</strong> ₹{{ session('order_total') ?? '850' }}</p>
                <p><strong>Shipping Address:</strong> {{ session('shipping_address') ?? '—' }}</p>
            </div> --}}


            <div class="mt-4">
                <a href="/shop" class="btn btn-main">
                    Continue Shopping
                </a>

                <a href="/" class="btn btn-outline">
                    Back to Home
                </a>
            </div>

        </div>

    </div>
@endsection
