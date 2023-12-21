<?php
session_start();

include 'config.php';

// Sprawdź, czy użytkownik jest zalogowany
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Utwórz sesję użytkownika "Guest" w przypadku braku zalogowania
    $_SESSION['user_id'] = 'guest_' . uniqid(); // Tworzy unikalne ID dla użytkownika "Guest"
    $user_id = $_SESSION['user_id'];

    // Sprawdź, czy użytkownik to gość
    $isGuest = strpos($user_id, 'guest_') === 0;

    // Jeśli to gość, utwórz odpowiedni wpis w tabeli users, jeśli nie istnieje
    if ($isGuest) {
        $guestInsertQuery = "INSERT IGNORE INTO users (user_id) VALUES ('$user_id')";
        if ($mysqli->query($guestInsertQuery) !== TRUE) {
            echo "Błąd podczas tworzenia użytkownika gościa: " . $mysqli->error;
            exit();
        }
    }
}

// Pozostała część kodu pozostaje bez zmian
$name = $mysqli->real_escape_string($_POST["name"]);
$address = $mysqli->real_escape_string($_POST["address"]);
$pizza = $mysqli->real_escape_string($_POST["pizza"]);
$size = $mysqli->real_escape_string($_POST["size"]);
$sauce = $mysqli->real_escape_string($_POST["sauce"]);
$crust = $mysqli->real_escape_string($_POST["crust"]);
$delivery = $mysqli->real_escape_string($_POST["delivery"]);
$createAccount = isset($_POST["account"]) ? 1 : 0;

// Ustaw zmienne sesji
$_SESSION['name'] = $name;
$_SESSION['address'] = $address;
$_SESSION['pizza'] = $pizza;
$_SESSION['size'] = $size;
$_SESSION['sauce'] = $sauce;
$_SESSION['crust'] = $crust;
$_SESSION['delivery'] = $delivery;
$_SESSION['createAccount'] = $createAccount;

// Dodaj zamówienie do bazy danych
$query = "INSERT INTO orders (user_id, name, address, pizza, size, sauce, crust, delivery, create_account) VALUES ('$user_id', '$name', '$address', '$pizza', '$size', '$sauce', '$crust', '$delivery', '$createAccount')";

// Dodaj wydruk SQL przed wykonaniem zapytania
echo "Zapytanie SQL: $query";

if ($mysqli->query($query) === TRUE) {
    // Pomyślnie dodano zamówienie do bazy danych
    header("Location: summary.php");
    exit();
} else {
    echo "Błąd podczas dodawania zamówienia do bazy danych: " . $mysqli->error;
    // Dodaj dodatkowe informacje diagnostyczne, takie jak wartości zmiennych
    echo "<br>user_id: $user_id, name: $name, address: $address, pizza: $pizza, size: $size, sauce: $sauce, crust: $crust, delivery: $delivery, createAccount: $createAccount";
    exit();
}
?>
