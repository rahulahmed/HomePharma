<?php
// Display products
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['product_name'] . " - $" . $row['price'] . " <button onclick=\"addToCart(" . $row['product_id'] . ")\">Add to Cart</button><br>";
}
?>
