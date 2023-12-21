<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $rating = $_POST['rating'];

    // Sprawdź, czy ocena mieści się w zakresie 1-5
    if ($rating >= 1 && $rating <= 5) {
        // Dodaj kod do zaktualizowania oceny zamówienia w bazie danych
        $updateQuery = "UPDATE orders SET rating = $rating WHERE order_id = $order_id";
        $mysqli->query($updateQuery);
    } else {
        // Możesz obsłużyć błąd w przypadku niewłaściwej oceny
        echo "Błąd: Ocena musi być w zakresie od 1 do 5.";
    }
}

header("Location: order_history.php");
exit();
?>
