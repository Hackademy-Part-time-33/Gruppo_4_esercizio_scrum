<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
</head>
<body>
    <h1>View Product</h1>
    <div>
        <strong>Name:</strong> {{ $product->name }}
    </div>
    <div>
        <strong>Description:</strong> {{ $product->description }}
    </div>
    <div>
        <strong>Price:</strong> {{ $product->price }}
    </div>
    <div>
        <strong>Quantity:</strong> {{ $product->quantity }}
    </div>
    <a href="{{ route('products.index') }}">Back to Product List</a>
</body>
</html>
