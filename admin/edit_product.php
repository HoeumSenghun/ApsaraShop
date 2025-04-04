<?php
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $stmt = $pdo->prepare("UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?");
    $stmt->execute([$name, $description, $price, $id]);

    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch();
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <input type="text" name="name" value="<?= $product['name'] ?>" required>
    <textarea name="description" required><?= $product['description'] ?></textarea>
    <input type="number" name="price" step="0.01" value="<?= $product['price'] ?>" required>
    <button type="submit">Update Product</button>
</form>