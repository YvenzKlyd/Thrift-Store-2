<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Merch Store</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-merch {
            background-image: url('path_to_your_background_image.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="antialiased bg-gray-100 text-gray-800">
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <a href="#" class="text-2xl font-bold text-gray-900">Merch Store</a>
                <nav class="space-x-4">
                    <a href="{{ url('/home') }}" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900">Register</a>
                    @endif
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="bg-merch h-screen flex items-center justify-center text-center text-white">
            <div class="max-w-2xl mx-auto px-4 py-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Our Merch Store</h1>
                <p class="text-lg md:text-xl mb-8">Explore our latest collections and exclusive offers.</p>
                <a href="#shop" class="bg-red-500 text-white py-2 px-6 rounded-lg text-lg hover:bg-red-600 transition">Shop Now</a>
            </div>
        </section>

        <section id="shop" class="py-16">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center">Our Best Sellers</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Product Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="path_to_product_image.jpg" alt="Product Name" class="w-full h-48 object-cover mb-4 rounded-t-lg">
                        <h3 class="text-xl font-semibold mb-2">Product Name</h3>
                        <p class="text-gray-600 mb-4">$29.99</p>
                        <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-lg text-center hover:bg-red-600 transition">Buy Now</a>
                    </div>
                    <!-- Add more product cards as needed -->
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 Merch Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
