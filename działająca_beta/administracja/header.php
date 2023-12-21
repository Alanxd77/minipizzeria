<!-- header.php -->
<?php
session_start();

// Sprawdź, czy użytkownik jest zalogowany
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    echo '<header>';
    echo '<a href="order_history.php" class="account-link">Konto</a>';
    echo '<h1>Menu Pizzerii</h1>';
    echo '<a href="orders_management.php" class="admin-link">Zarządzanie Zamówieniami</a>';
    echo '</header>';
} else {
    echo '<header>';
    echo '<h1>Menu Pizzerii</h1>';
    echo '<a href="orders_management.php" class="admin-link">Zarządzanie Zamówieniami</a>';
    echo '</header>';
}
?>
