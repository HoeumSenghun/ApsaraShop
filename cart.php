<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Apsara Shop</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products/index.php">Products</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="cart">
        <div class="container">
            <h2>Shopping Cart</h2>
            <div class="cart-items">
                <?php
                session_start();
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $product_id => $quantity) {
                        // Fetch product details from the database
                        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
                        $stmt->execute([$product_id]);
                        $product = $stmt->fetch();
                        ?>
                        <div class="cart-item">
                            <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                            <h3><?= $product['name'] ?></h3>
                            <p>$<?= $product['price'] ?></p>
                            <p>Quantity: <?= $quantity ?></p>
                            <a href="includes/remove_from_cart.php?id=<?= $product_id ?>" class="btn">Remove</a>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>Your cart is empty.</p>";
                }
                ?>
            </div>
            <a href="checkout.php" class="btn">Proceed to Checkout</a>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>