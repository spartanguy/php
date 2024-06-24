<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
</head>
<body>
    <h1>Edit Order</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="customer_name">Customer Name:</label>
            <input type="text" id="customer_name" name="customer_name" value="{{ $order->customer_name }}" required>
        </div>
        <div>
            <label for="product_id">Product:</label>
            <select id="product_id" name="product_id" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" @if($product->id == $order->product_id) selected @endif>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="{{ $order->quantity }}" required>
        </div>
        <button type="submit">Update Order</button>
    </form>
    <a href="{{ route('orders.index') }}">Back to Orders</a>
</body>
</html>