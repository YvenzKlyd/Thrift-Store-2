<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Thrift Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <style>
        body {
            background-color: #f9f4ef; /* Soft beige background */
            font-family: 'Georgia', serif; /* Vintage serif font */
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #6c757d; /* Darker muted gray */
        }
        .navbar-brand, .nav-link {
            color: #f8f9fa !important; /* Light text color */
            font-family: 'Courier New', monospace;
            transition: color 0.3s ease; /* Smooth color transition */
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #dcdcdc !important; /* Lighter shade on hover */
        }
        .btn-primary {
            background-color: #8B5E3C; /* Soft brown button */
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth background color transition */
        }
        .btn-primary:hover {
            background-color: #6F4E37; /* Darker brown on hover */
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }
        .footer {
            background-color: #343a40;
            color: #f8f9fa;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer a {
            color: #f8f9fa;
            text-decoration: none;
            transition: color 0.3s ease; /* Smooth color transition */
        }
        .footer a:hover {
            color: #dcdcdc; /* Lighter shade on hover */
            text-decoration: underline;
        }

        /* Animation styles */
        .slide-in-left {
            animation: slideInLeft 1s ease-out;
        }
        .slide-in-right {
            animation: slideInRight 1s ease-out;
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand slide-in-left" href="#">Thrift Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active slide-in-right" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link slide-in-right" href="{{ route('products.index') }}">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container flex-grow-1 d-flex justify-content-center align-items-center text-center">
        <div class="row">
            <div class="col">
                <h1 class="display-4 mb-4 slide-in-left">Welcome To Thrift Store!</h1>
                <p class="lead mb-4">Unique clothing just for you.</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg slide-in-right">Shop Now</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
