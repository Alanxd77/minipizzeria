<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pizzerii</title>
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
        session_start();

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
        <h1>Menu Pizzerii</h1>
        
    </header>

    <section>
        <h2>Pizze</h2>
        <ul>
            <?php
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
        <form action="process_order.php" method="POST" id="orderForm" onsubmit="submitOrder()">
            <label for="name">Imię:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Adres:</label>
            <input type="text" id="address" name="address" required>

            <label for="pizza">Wybierz pizzę:</label>
            <select id="pizza" name="pizza" required>
                <?php
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

            <label for="size">Wybierz rozmiar pizzy:</label>
            <select id="size" name="size" required>
                <option value="Mała">Mała</option>
                <option value="Średnia">Średnia</option>
                <option value="Duża">Duża</option>
            </select>

            <label for="sauce">Wybierz sos:</label>
            <select id="sauce" name="sauce" required>
                <option value="Czosnkowy">Czosnkowy</option>
                <option value="Mieszany">Mieszany</option>
                <option value="Pomidorowy">Pomidorowy</option>
            </select>

            <label for="crust">Wybierz rodzaj ciasta:</label>
            <select id="crust" name="crust" required>
                <option value="Klasyczne">Klasyczne</option>
                <option value="Cienkie">Cienkie</option>
                <option value="Grube">Grube</option>
            </select>

            <label for="delivery">Opcja dostawy MAX 15km:</label>
            <select id="delivery" name="delivery" required>
                <option value="Dostawa">Dostawa (+15 zł)</option>
                <option value="Odbiór osobisty">Odbiór osobisty</option>
            </select>

            <label for="account">Stworzyć konto?</label>
            <input type="checkbox" id="account" name="account">

            <button type="button" onclick="submitOrder()" id="submitButton">Złóż zamówienie</button>
        </form>

        <script>
            function submitOrder() {
                var createAccountCheckbox = document.getElementById("account");
                var nameInput = document.getElementById("name");
                var addressInput = document.getElementById("address");

                if (createAccountCheckbox.checked && (nameInput.value === "" || addressInput.value === "")) {
                    alert("Aby stworzyć konto, wprowadź imię i adres.");
                } else if (!createAccountCheckbox.checked && (nameInput.value === "" || addressInput.value === "")) {
                    alert("Wprowadź imię i adres, aby złożyć zamówienie.");
                } else if (createAccountCheckbox.checked) {
                    window.location.href = "login_register.php";
                } else {
                    document.getElementById("orderForm").submit();
                }
            }
        </script>
    </section>
</body>

</html>
