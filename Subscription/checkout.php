<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    $customerId = $_POST['customer_id'];
    $productId = $_POST['product_id'];
    $startDate = date('Y-m-d');
    $endDate = date('Y-m-d', strtotime("+1 month")); // Default subscription duration is 1 month
    $paymentMethod = $_POST['payment_method'];
    $deliveryInterval = $_POST['delivery_interval'];

    $sql = "INSERT INTO subscriptions (customer_id, start_date, end_date, product_id, payment_method, delivery_interval) VALUES ('$customerId', '$startDate', '$endDate', '$productId', '$paymentMethod', '$deliveryInterval')";
    mysqli_query($conn, $sql);

    echo "Subscription placed successfully!";
}
?>

<form method="post" action="">
    <input type="hidden" name="customer_id" value="1"> <!-- Replace with actual customer ID -->
    <input type="hidden" name="product_id" value="1"> <!-- Replace with actual product ID -->
    <label for="payment_method">Payment Method:</label>
    <select name="payment_method" id="payment_method">
        <option value="Cash on Delivery">Cash on Delivery</option>
        <option value="E-banking">E-banking</option>
    </select><br>
    <label for="delivery_interval">Delivery Interval (in days):</label>
    <input type="number" name="delivery_interval" id="delivery_interval" value="7"><br>
    <button type="submit" name="checkout">Checkout</button>
</form>
