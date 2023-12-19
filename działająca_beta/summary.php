<?php
// summary.php
session_start();
include 'config.php';

if (isset($_SESSION['name']) && isset($_SESSION['address']) && isset($_SESSION['pizza']) && isset($_SESSION['createAccount'])) {
    $name = $_SESSION['name'];
    $address = $_SESSION['address'];
    $pizza = $_SESSION['pizza'];
    $createAccount = $_SESSION['createAccount'];
} else {
    echo "Nieprawidłowe żądanie.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie Zamówienia</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <?php
        if (isset($_SESSION['username'])) {
            $userIDDisplay = isset($_SESSION['user_id']) ? '<span>ID: ' . $_SESSION['user_id'] . '</span>' : '';
            $usernameDisplay = isset($_SESSION['username']) ? '<span>Nazwa użytkownika: ' . $_SESSION['username'] . '</span>' : '';

            echo $userIDDisplay;
            echo $usernameDisplay;
            echo '<a href="logout.php" class="account-link">Wyloguj się</a>';
            echo '<a href="order_history.php" class="account-link">Historia zamówień</a>';
        } else {
            echo '<a href="login_register.php" class="account-link">Zaloguj się</a>';
        }
        ?>
        <h1>Podsumowanie Zamówienia</h1>
    </header>

    <section>
        <?php
        echo "<h2>Podsumowanie zamówienia:</h2>";
        echo "<p>Imię: $name</p>";
        echo "<p>Adres: $address</p>";
        echo "<p>Wybrana pizza: $pizza</p>";

        if (!isset($_SESSION['username'])) {
            echo "<p>Stworzyć konto? " . ($createAccount ? 'Tak' : 'Nie') . "</p>";
        }
        ?>
    </section>

    <footer>
        <?php
        // Tutaj wcześniej wyświetlone informacje o zamówieniu
        ?>
    </footer>
</body>

</html>
