<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarządzanie Zamówieniami</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Zarządzanie Zamówieniami</h1>
    </header>

    <section>
        <h2>Otrzymane Zamówienia</h2>
        <table>
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Adres</th>
                    <th>Pizza</th>
                    <th>Ocena</th>
                    <th>Stworzyć Konto?</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'display_orders.php'; ?>
            </tbody>
        </table>
    </section>
</body>

</html>

