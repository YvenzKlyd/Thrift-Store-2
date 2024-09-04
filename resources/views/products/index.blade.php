<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List - Thrift Store</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f9f4ef; /* Soft beige background */
            font-family: 'Lora', serif;
            padding: 20px;
        }
        h1 {
            color: #4a3f35;
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            margin-bottom: 30px;
            text-align: center;
        }
        .container {
            max-width: 1200px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fffaf0;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.15);
        }
        .card img {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            height: 400px; /* Adjust height for portrait */
            width: auto;  /* Maintain aspect ratio */
            object-fit: cover;
            filter: sepia(20%);
        }
        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #4a3f35;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }
        .price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #8b5e3c; /* Price color */
            margin-bottom: 10px;
        }
        .btn-custom {
            background-color: #8b5e3c;
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
        }
        .btn-custom:hover {
            background-color: #714a2f;
            color: #fff;
        }
        .btn-secondary, .btn-success, .btn-warning, .btn-danger {
            border-radius: 30px;
        }
        /* Search Form */
        .search-form input {
            border-radius: 30px 0 0 30px;
            border: 1px solid #ccc;
            padding: 10px 20px;
            width: calc(100% - 120px);
            max-width: 400px;
        }
        .search-form button {
            border-radius: 0 30px 30px 0;
            padding: 10px 20px;
            border: 1px solid #ccc;
            background-color: #8b5e3c;
            color: #fff;
        }
        .search-form button:hover {
            background-color: #714a2f;
        }
        /* Alert Message */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
        }
        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .card {
                margin-bottom: 20px;
            }
            h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Our Unique Finds</h1>

        <!-- Navigation Link to Home Page -->
        <div class="mb-4 text-center">
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
            <a href="{{ route('products.create') }}" class="btn btn-success ms-2">Add New Product</a>
        </div>

        <!-- Display success message if available -->
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Search Form -->
        <form action="{{ route('products.index') }}" method="GET" class="search-form d-flex justify-content-center mb-5">
            <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search products...">
            <button type="submit" class="btn">Search</button>
        </form>

        <!-- List of products -->
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <!-- Display product image or a placeholder -->
                        @if($product->image && file_exists(public_path('images/' . $product->image)))
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}" class="card-img-top">
                        @else
                            <img src="https://via.placeholder.com/400x600?text=No+Image" alt="No Image" class="card-img-top">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="price">₱{{ number_format($product->price, 2) }}</p> <!-- Display the price -->
                            <p class="card-text flex-grow-1">{{ $product->description ?? 'No description available for this product.' }}</p>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ms-2">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
