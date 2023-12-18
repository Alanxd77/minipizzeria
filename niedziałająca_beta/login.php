<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $mysqli->real_escape_string($_POST["login_username"]);
    $password = $_POST["login_password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            // Ustawienie ID użytkownika w sesji
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header("Location: menu.php"); // Przekierowanie na stronę menu po zalogowaniu
            exit();
        } else {
            echo "Błędne hasło.";
        }
    } else {
        echo "Błędna nazwa użytkownika.";
    }

    $mysqli->close();
}
?>
