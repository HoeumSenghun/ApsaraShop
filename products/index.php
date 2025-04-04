<?php
require_once '../includes/db.php';

// Check if a search query is present
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Search for products by name or description
    $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE :search OR description LIKE :search");
    $stmt->execute(['search' => "%$search%"]);
} else {
    // If no search query, show all products
    $stmt = $pdo->query("SELECT * FROM products");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <!-- Header -->
    <?php include '../includes/header.php'; ?>

    <!-- Product Grid -->
    <section class="product-listing">
        <div class="container">
            <h2>All Products</h2>
            <?php if (isset($_GET['search'])): ?>
                <p>Showing results for: <strong><?= htmlspecialchars($_GET['search']) ?></strong></p>
            <?php endif; ?>
            <div class="products-grid">
                <?php while ($product = $stmt->fetch()): ?>
                    <div class="product-card">
                        <img src="../assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                        <h3><?= $product['name'] ?></h3>
                        <p>$<?= $product['price'] ?></p>
                        <a href="view_product.php?id=<?= $product['id'] ?>" class="btn">View Details</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
</body>
</html>