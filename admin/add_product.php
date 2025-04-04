<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
                </ul>
            </nav>
        </div>
    </header>

    <section class="admin-form">
        <div class="container">
            <h2>Add Product</h2>
            <form method="POST" enctype="multipart/form-data">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>

                <label for="image">Product Image:</label>
                <input type="file" id="image" name="image" required>

                <button type="submit" class="btn">Add Product</button>
            </form>
        </div>
    </section>
</body>
</html>