<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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

    <section class="checkout">
        <div class="container">
            <h2>Checkout</h2>
            <form method="POST" action="includes/process_order.php">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="address">Shipping Address:</label>
                <textarea id="address" name="address" required></textarea>

                <label for="payment">Payment Method:</label>
                <select id="payment" name="payment" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                </select>

                <button type="submit" class="btn">Place Order</button>
            </form>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>