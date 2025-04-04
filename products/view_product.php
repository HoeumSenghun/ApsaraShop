<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Apsara Shop</h1>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="index.php">Products</a></li>
                    <li><a href="../cart.php">Cart</a></li>
                    <li><a href="../admin/index.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Product Details -->
    <section class="product-details">
        <div class="container">
            <?php
            require_once '../includes/db.php';
            $id = $_GET['id'];
            $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
            $stmt->execute([$id]);
            $product = $stmt->fetch();
            ?>
            <div class="product">
                <img src="../assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                <h2><?= $product['name'] ?></h2>
                <p><?= $product['description'] ?></p>
                <p><strong>Price:</strong> $<?= $product['price'] ?></p>
                <button class="btn">Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>