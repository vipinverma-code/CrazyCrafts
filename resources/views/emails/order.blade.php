<h2>New Order Received</h2>

<p><strong>Order ID:</strong> {{ $order['order_id'] }}</p>
<p><strong>Name:</strong> {{ $order['name'] }}</p>
<p><strong>Email:</strong> {{ $order['email'] }}</p>
<p><strong>Phone:</strong> {{ $order['phone'] }}</p>
<p><strong>Address:</strong> {{ $order['address'] }}</p>
<p><strong>Total:</strong> ₹{{ $order['total'] }}</p>

<hr>

<h3>Order Items</h3>

@foreach ($order['items'] ?? [] as $item)
    <p>
        {{ $item['name'] }}
        (Qty: {{ $item['quantity'] }})
        – ₹{{ $item['price'] * $item['quantity'] }}
    </p>
@endforeach
    