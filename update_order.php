<?php
session_start();
require 'db.php';

// Only admin can update
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// Check POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'] ?? null;
    $status = $_POST['status'] ?? null;

    if ($order_id && $status) {
        // Update the order status
        $stmt = $conn->prepare("UPDATE orders SET status=? WHERE id=?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("si", $status, $order_id);

        if ($stmt->execute()) {
            $stmt->close();
            // Redirect back to admin_orders.php
            header("Location: admin_orders.php?msg=updated");
            exit;
        } else {
            die("Update failed: " . $stmt->error);
        }
    } else {
        die("Invalid order ID or status");
    }
} else {
    header("Location: admin_orders.php");
    exit;
}
