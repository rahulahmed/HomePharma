<?php
session_start();
error_reporting(0);
include('includes/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the custom order form
    $customProductName = $_POST['custom_product_name'];
    $customProductDetails = $_POST['custom_product_details'];
    // Add more fields as needed

    // Validate and sanitize input if required

    // Store the custom order in the database (you need to create a table for custom orders)
    $sql = "INSERT INTO custom_orders (product_name, product_details) VALUES ('$customProductName', '$customProductDetails')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Custom Order placed successfully!')</script>";
    } else {
        echo "<script>alert('Error placing Custom Order')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
</head>
<body>
    <!-- Add your custom order form here -->
    <form action="custom-order.php" method="post">
        <label for="custom_product_name">Product Name:</label>
        <input type="text" name="custom_product_name" required><br>

        <label for="custom_product_details">Product Details:</label>
        <textarea name="custom_product_details" required></textarea><br>

        <!-- Add more fields as needed -->

        <input type="submit" value="Place Custom Order">
    </form>

    <!-- Add the rest of your HTML content if needed -->
</body>
</html>
