<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $price = $_POST['price'];
    $category = $_POST['category'];  // <-- NEW FIELD

    if (!empty($_FILES['image']['name'])) {
        $image = time() . "_" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);
    } else {
        $image = null;
    }

    $stmt = $conn->prepare("
        INSERT INTO products (name, price, image, category)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->bind_param("sdss", $name, $price, $image, $category);
    $stmt->execute();
    
    header("Location: admin_panel.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_panel.php">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="adminNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="admin_panel.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="admin_orders.php">All Orders</a></li>
        <li class="nav-item"><a class="nav-link active" href="add_product.php">Add Product</a></li>
        <li class="nav-item"><a class="nav-link btn btn-danger text-white ms-2" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4 card p-4 shadow-sm">
    <h2 class="mb-4">➕ Add New Product</h2>

    <form method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (₹):</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <!-- Category Dropdown -->
        <div class="mb-3">
            <label class="form-label">Category:</label>
            <select name="category" class="form-select" required>
                <option value="">-- Select Category --</option>
                <option value="Vegetable">Vegetable</option>
                <option value="Fruit">Fruit</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Product Image:</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">✔ Add Product</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
