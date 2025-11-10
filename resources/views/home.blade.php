<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko keren - Modern E-commerce</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header -->
    <header class="navbar">
        <div class="logo">Toko keren</div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="cart">
            <span id="cart-count">0</span> 🛒
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Discover Your Style</h1>
        <p>Trendy collections for all seasons</p>
        <button class="btn">Shop Now</button>
    </section>

    <!-- Product Section -->
    <section class="products">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product-card" data-id="1">
                <img src="{{ asset('images/classic_shoes.jpg') }}" alt="tes">
                <h3>Classic Sneakers</h3>
                <p>$59.99</p>
                <button class="add-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-id="2">
                <img src="{{ asset('images/leathter_jacket.webp') }}" alt="Product 2">
                <h3>Leather Jacket</h3>
                <p>$120.00</p>
                <button class="add-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-id="3">
                <img src="{{ asset('images/summer_hat.jpg') }}" alt="Product 3">
                <h3>Summer Hat</h3>
                <p>$25.50</p>
                <button class="add-cart">Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 Toko keren. All Rights Reserved.</p>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
