<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>@yield('title', 'Product List')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My App</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('product.index') }}">Product Index</a></li>
                    <li><a class="dropdown-item" href="{{ route('product.create') }}">Add Product</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    suppliers
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('suppliers.index') }}">suppliers Index</a></li>
                    <li><a class="dropdown-item" href="{{ route('suppliers.create') }}">Add suppliers</a></li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('categories.index') }}">Category Index</a></li>
                    <li><a class="dropdown-item" href="{{ route('categories.create') }}">Add Category</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route("gestionstock.index")}}">sales_orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("gestionstock.index")}}">customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("gestionstock.index")}}">stock_movements</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
