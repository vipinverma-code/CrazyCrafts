<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: Arial;
            background: #faf8f4;
            margin: 0;
            padding: 0
        }

        .mail-card {
            width: 90%;
            max-width: 650px;
            margin: 20px auto;
            background: white;
            border-radius: 15px;
            padding: 25px;
        }

        .header {
            text-align: center;
        }

        .header h2 {
            color: #222
        }

        .success-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #dfffe2;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 44px;
            margin: 25px auto;
            /* <-- Center Perfectly */
            border: 8px solid #b6ffce;
        }




        .details-box {
            background: #f7f3e9;
            padding: 18px;
            border-radius: 12px;
            margin-top: 15px
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #777
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }

        .table th {
            background: #121212;
            color: white;
        }

        .table th,
        .table td {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #555;
            /* 🔥 Clean Border */
        }

        .btn {
            background: #b54a24;
            color: white;
            padding: 10px 18px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px
        }

        @media(max-width:600px) {
            .mail-card {
                padding: 18px
            }
        }
    </style>
</head>

<body>

    <div class="mail-card">

        <div class="header">
            <div class="success-icon">✔</div>

            <h2>Thank You! Your Order is Confirmed 🎉</h2>
            <p>We appreciate your order. Below are your order details:</p>
        </div>

        <div class="details-box">
            <p><strong>Order ID:</strong> {{ $order['order_id'] }}</p>
            <p><strong>Name:</strong> {{ $order['name'] }}</p>
            <p><strong>Email:</strong> {{ $order['email'] }}</p>
            <p><strong>Phone:</strong> {{ $order['phone'] }}</p>
            <p><strong>Shipping Address:</strong> {{ $order['address'] }}</p>
            <p><strong>Total Amount:</strong> ₹{{ $order['total'] }}</p>
        </div>

        <h3>Order Items</h3>

        <table border="1px" class="table">
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
            </tr>

            @foreach ($order['items'] as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>₹{{ $item['price'] * $item['quantity'] }}</td>
                </tr>
            @endforeach
        </table>

        <div class="footer">
            <a class="btn" href="{{ url('/') }}">Continue Shopping</a>
            <p>Thanks for shopping with us ❤️</p>
        </div>

    </div>

</body>

</html>
