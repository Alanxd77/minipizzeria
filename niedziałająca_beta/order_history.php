<?php
session_start();

// Sprawdź, czy użytkownik jest zalogowany
if (!isset($_SESSION['user_id'])) {
    // Jeśli niezalogowany, przekieruj do strony logowania
    header("Location: login.php");
    exit();
}

include 'config.php';

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM orders WHERE user_id = '$user_id'";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Zamówień</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <?php
        // Wyświetl ID użytkownika i nazwę użytkownika, jeśli są dostępne
        echo '<span>ID: ' . $_SESSION['user_id'] . '</span>';
        echo '<span>Nazwa użytkownika: ' . $_SESSION['username'] . '</span>';
        echo '<a href="logout.php" class="account-link">Wyloguj się</a>';
        echo '<a href="order_history.php" class="account-link">Historia zamówień</a>';
        ?>
        <h1>Historia Zamówień</h1>
        <a href="menu.php" class="menu-link">Powrót do Menu</a>
    </header>

    <section>
        <h2>Twoja Historia Zamówień</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Zamówienia</th>
                    <th>Imię</th>
                    <th>Adres</th>
                    <th>Pizza</th>
                    <th>Data Zamówienia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Wyświetl historię zamówień
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['order_id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['address']}</td>";
                        echo "<td>{$row['pizza']}</td>";
                        echo "<td>{$row['order_date']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Brak zamówień.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>

</html>

<?php
$mysqli->close();
?>
