<?php
// display_orders.php
include 'config.php';

$query = "SELECT orders.name, orders.address, orders.pizza, orders.rating, orders.create_account, users.username
          FROM orders
          LEFT JOIN users ON orders.user_id = users.user_id
          ORDER BY orders.order_date DESC"; 

$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['pizza']}</td>";
        echo "<td>{$row['rating']}</td>";
        echo "<td>" . ($row['create_account'] ? 'Tak' : 'Nie') . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Brak zamówień.</td></tr>";
}

$mysqli->close();
?>
