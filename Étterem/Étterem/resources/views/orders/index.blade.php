<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}">Add New Order</a>
    <ul>
        @foreach ($orders as $order)
            <li>
                <strong>{{ $order->customer_name }}</strong>
                <p>Product: {{ $order->product->name }}</p>
                <p>Quantity: {{ $order->quantity }}</p>
                <p>Total Price: ${{ $order->total_price }}</p>
                <a href="{{ route('orders.edit', $order->id) }}">Edit</a>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>