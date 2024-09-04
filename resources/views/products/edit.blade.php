<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - Thrift Store</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lora', serif;
            background-color: #f9f4ef; /* Soft, warm beige background */
            padding: 20px;
        }
        h1 {
            color: #4a3f35;
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-container {
            background-color: #fffaf0; /* Slightly off-white for a vintage feel */
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        .form-group label {
            font-weight: 500;
            color: #4a3f35;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f7f5f2; /* Subtle background color for input fields */
        }
        .btn-primary {
            background-color: #D2691E; /* Warm earthy color (Terracotta) */
            border-color: #D2691E;
            border-radius: 30px;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #a35617;
            border-color: #a35617;
        }
        .btn-secondary {
            border-radius: 30px;
            padding: 10px 20px;
            background-color: #556B2F; /* Olive Green */
            border-color: #556B2F;
        }
        .btn-secondary:hover {
            background-color: #4a5a27;
            border-color: #4a5a27;
        }
        .alert {
            border-radius: 5px;
            background-color: #f7d7d7; /* Soft red for error alerts */
            color: #4a3f35;
            border: 1px solid #d3a1a1;
        }
        .img-thumbnail {
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1); /* Soft shadow for images */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Product</h1>

        <div class="form-container">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name:</label>
                    <input type="text" id="product_name" name="product_name" class="form-control" value="{{ old('product_name', $product->product_name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea id="description" name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="number" id="stock" name="stock" class="form-control" value="{{ old('stock', $product->stock) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" id="image" name="image" class="form-control">
                    @if ($product->image)
                        <div class="mt-2">
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}" class="img-thumbnail" width="150">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>

            <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Product List</a>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
