<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Admin Panel</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="add_product.php">Add Product</a></li>
                    <li><a href="manage_orders.php">Manage Orders</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="admin-dashboard">
        <div class="container">
            <h2>Dashboard</h2>
            <div class="stats">
                <div class="stat-card">
                    <h3>Total Products</h3>
                    <p><?= $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn(); ?></p>
                </div>
                <div class="stat-card">
                    <h3>Total Orders</h3>
                    <p><?= $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn(); ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>