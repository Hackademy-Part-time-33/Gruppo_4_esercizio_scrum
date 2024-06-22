<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Created</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="alert alert-success" role="alert">
            Product created successfully!
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Another Product</a>
    </div>
</body>
</html>
