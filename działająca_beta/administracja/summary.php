<?php
// summary.php
session_start();
include 'config.php';

if (isset($_SESSION['name']) && isset($_SESSION['address']) && isset($_SESSION['pizza']) && isset($_SESSION['size']) && isset($_SESSION['sauce']) && isset($_SESSION['crust']) && isset($_SESSION['delivery']) && isset($_SESSION['createAccount'])) {
    $name = $_SESSION['name'];
    $address = $_SESSION['address'];
    $pizza = $_SESSION['pizza'];
    $size = $_SESSION['size'];
    $sauce = $_SESSION['sauce'];
    $crust = $_SESSION['crust'];
    $delivery = $_SESSION['delivery'];
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
    <style>
        /* Resetowanie stylów */
        body, h1, h2, p, ul, li, table {
            margin: 0;
            padding: 0;
        }

        /* Podstawowe style strony */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #ff6347;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        h1 {
            font-size: 3em;
        }

        section {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            color: #ff6347;
            font-size: 2em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #ff6347;
            color: #fff;
        }

        /* Formularz logowania */
        #login {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            color: #333;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #ff6347;
            color: #fff;
            padding: 12px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #d14029;
        }

        /* Stopka */
        footer {
            text-align: center;
            padding: 1em 0;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
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
        echo "<p>Rozmiar: $size</p>";
        echo "<p>Rodzaj sosu: $sauce</p>";
        echo "<p>Rodzaj ciasta: $crust</p>";
        echo "<p>Opcja dostawy: $delivery</p>";

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
