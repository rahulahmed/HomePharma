<?php
// Admin dashboard to view and approve subscriptions
$sql = "SELECT * FROM subscriptions";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Subscription ID: " . $row['subscription_id'] . "<br>";
    echo "Customer ID: " . $row['customer_id'] . "<br>";
    echo "Product ID: " . $row['product_id'] . "<br>";
    echo "Start Date: " . $row['start_date'] . "<br>";
    echo "End Date: " . $row['end_date'] . "<br>";
    echo "Payment Method: " . $row['payment_method'] . "<br>";
    echo "Delivery Interval: " . $row['delivery_interval'] . " days<br>";
    echo "Approved: " . ($row['approved'] ? 'Yes' : 'No') . "<br>";
    echo "<button onclick=\"approveSubscription(" . $row['subscription_id'] . ")\">Approve Subscription</button><br><br>";
}
?>

<script>
function approveSubscription(subscriptionId) {
    // Implement logic to approve subscription
    // You can use AJAX to send the data to the server
    console.log("Subscription approved: " + subscriptionId);
}
</script>
