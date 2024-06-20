<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}" required>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}" required>
        </div>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
