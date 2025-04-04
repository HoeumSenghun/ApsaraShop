<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apsara Shop</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Apsara Shop</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products/index.php">Products</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="admin/index.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="products-grid">
                <!-- Example Product -->
                <div class="product-card">
                    <img src="assets/images/product1.jpg" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>$19.99</p>
                    <a href="products/view_product.php?id=1" class="btn">View Details</a>
                </div>
                <!-- Add more products dynamically using PHP -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>