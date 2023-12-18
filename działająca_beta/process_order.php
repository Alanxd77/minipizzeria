<?php
// process_order.php
session_start();
include 'config.php';

// Sprawdź, czy użytkownik jest zalogowany
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Pobierz ID użytkownika "Guest" z bazy danych
    $guestUserQuery = "SELECT user_id FROM users WHERE username = 'Guest'";
    $guestUserResult = $mysqli->query($guestUserQuery);

    if ($guestUserResult->num_rows > 0) {
        $guestUserData = $guestUserResult->fetch_assoc();
        $user_id = $guestUserData['user_id'];
    } else {
        // Jeśli użytkownik "Guest" nie istnieje, utwórz go
        $createGuestUserQuery = "INSERT INTO users (username, password) VALUES ('Guest', 'guest_password')";
        if ($mysqli->query($createGuestUserQuery) === TRUE) {
            // Pobierz ID użytkownika "Guest" z bazy danych
            $guestUserResult = $mysqli->query($guestUserQuery);
            $guestUserData = $guestUserResult->fetch_assoc();
            $user_id = $guestUserData['user_id'];
        } else {
            echo "Błąd podczas tworzenia użytkownika 'Guest': " . $mysqli->error;
            exit();
        }
    }
}

// Pozostała część kodu pozostaje bez zmian
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
?>
