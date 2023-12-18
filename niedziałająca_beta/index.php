<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pizzerii</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <?php
        session_start();

        // Sprawdź, czy użytkownik jest zalogowany
        if (isset($_SESSION['username'])) {
            // Wyświetl ID użytkownika i nazwę użytkownika, jeśli są dostępne
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
        <h1>Menu Pizzerii</h1>

        <!-- Odnośnik do strony zarządzania zamówieniami -->
        <a href="orders_management.php" class="admin-link">Zarządzanie Zamówieniami</a>
    </header>

    <section>
        <h2>Pizze</h2>
        <ul>
            <?php
            // Pobierz menu pizzy z bazy danych
            include 'config.php';
            $query = "SELECT * FROM pizza_menu";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li><strong>{$row['name']}</strong> - {$row['price']} zł</li>";
                }
            } else {
                echo "<li>Brak dostępnych pizz.</li>";
            }

            $mysqli->close();
            ?>
        </ul>
    </section>

    <section>
        <h2>Zamówienie</h2>
        <form action="process_order.php" method="POST" id="orderForm">
            <label for="name">Imię:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Adres:</label>
            <input type="text" id="address" name="address" required>

            <label for="pizza">Wybierz pizzę:</label>
            <select id="pizza" name="pizza" required>
                <?php
                // Wygeneruj dynamicznie opcje wyboru pizzy z bazy danych
                include 'config.php';
                $query = "SELECT * FROM pizza_menu";
                $result = $mysqli->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['name']}'>{$row['name']} - {$row['price']} zł</option>";
                    }
                }

                $mysqli->close();
                ?>
            </select>

            <label for="account">Stworzyć konto?</label>
            <input type="checkbox" id="account" name="account">

            <button type="button" onclick="submitOrder()">Złóż zamówienie</button>
        </form>

        <script>
            function submitOrder() {
                var createAccountCheckbox = document.getElementById("account");

                // Sprawdź, czy pole wyboru "Stworzyć konto?" jest zaznaczone
                if (createAccountCheckbox.checked) {
                    // Przekieruj do strony logowania/rejestracji
                    window.location.href = "login_register.php";
                } else {
                    // Wyślij formularz normalnie
                    document.getElementById("orderForm").submit();
                }
            }
        </script>
    </section>
</body>

</html>
