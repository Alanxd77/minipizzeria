<?php
// process_order.php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sprawdź, czy użytkownik jest zalogowany
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        // Ustaw domyślną wartość, jeśli użytkownik nie jest zalogowany
        $user_id = isset($_POST["user_id"]) ? $_POST["user_id"] : NULL;
    }

    $name = $mysqli->real_escape_string($_POST["name"]);
    $address = $mysqli->real_escape_string($_POST["address"]);
    $pizza = $mysqli->real_escape_string($_POST["pizza"]);
    $createAccount = isset($_POST["create_account"]) ? 1 : 0;

    // Ustaw zmienne sesji
    $_SESSION['name'] = $name;
    $_SESSION['address'] = $address;
    $_SESSION['pizza'] = $pizza;
    $_SESSION['createAccount'] = $createAccount;
    $_SESSION['user_id'] = $user_id;

    // Dodaj zamówienie do bazy danych
    $query = "INSERT INTO orders (user_id, name, address, pizza, create_account) VALUES ('$user_id', '$name', '$address', '$pizza', '$createAccount')";

    if ($mysqli->query($query) === TRUE) {
        // Pomyślnie dodano zamówienie do bazy danych
        header("Location: summary.php");
        exit();
    } else {
        echo "Błąd podczas dodawania zamówienia do bazy danych: " . $mysqli->error;
        exit();
    }
} else {
    echo "Nieprawidłowe żądanie.";
    exit();
}
?>

