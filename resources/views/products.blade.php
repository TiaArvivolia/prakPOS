<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - {{ ucfirst($category) }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .category-title {
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
        }
        .product-item {
            flex: 0 0 30%;
            margin: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="category-title text-center">
            <h1 class="display-4">Products in {{ ucfirst($category) }}</h1>
            <p class="lead">Find the best products in the {{ ucfirst($category) }} category</p>
        </div>

        <div class="product-list row">
            @foreach($products as $product)
                <div class="product-item col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product }}</h5>
                            <p class="card-text">This is a placeholder description for {{ $product }}. It is one of the top products in this category.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
