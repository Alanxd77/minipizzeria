<?php
// process_order.php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $mysqli->real_escape_string($_POST["name"]);
    $address = $mysqli->real_escape_string($_POST["address"]);
    $pizza = $mysqli->real_escape_string($_POST["pizza"]);
    $createAccount = isset($_POST["account"]) ? 1 : 0;

    // Uwaga: ocena pizzy jest teraz przechowywana w sesji do momentu podsumowania zamówienia
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['address'] = $address;
    $_SESSION['pizza'] = $pizza;
    $_SESSION['createAccount'] = $createAccount;

    header("Location: summary.php");
    exit();
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
