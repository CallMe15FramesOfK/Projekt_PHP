<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakup gry</title>
    <link rel="stylesheet" href="./styles/style_purchase.css">
</head>

<body>
    <header>
        <h1>Sklep dla graczy</h1>
        <nav>
            <ul>
                <li><a href="./index.php">Strona Główna</a></li>
                <li><a href="./games.php">Gry</a></li>
                <?php if (isset($_SESSION['logged_in'])) :
                    if ($_SESSION['user']['rank'] === 'admin') : ?><li><a href="./admin_panel.php">Panel admina</a></li>   <?php endif; endif;?>
                <?php if (!isset($_SESSION['logged_in'])) : ?><li><a href="./log_in.php">Logowanie</a></li><?php endif; ?>
                <?php if (isset($_SESSION['logged_in'])) : ?><li><a href="./log_out.php">Wylogowanie</a></li><?php endif; ?>
            </ul>
        </nav>
        <?php if (isset($_SESSION['logged_in'])) : ?>
            <div class="user-welcome">
            <p>Witaj, <?php echo $_SESSION['user']['username']; ?></p>
            </div>
        <?php endif; ?>
    </header>
    <main>
        <section class="purchase">
            <h2>Zakup gry:</h2>
            <form action="./PHP_connections/process_purchase.php" method="post" class="purchase">
                <label for="game_name">Wybierz grę:</label>
                <select name="game_name" id="game_name" required>
                    <?php
                    include "./PHP_connections/connection.php";
                    $sql = "SELECT * FROM games";
                    $result = $conn->query($sql);
                    if ($result->rowCount() > 0) {
                        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value=\"" . $row["game_name"] . "\">" . $row["game_name"] . " - " . $row["game_price"] . " PLN</option>";
                        }
                    } else {
                        echo "<option value=\"\">Brak gier w ofercie</option>";
                    }
                    ?>
                </select>
                <br>
                <label for="name">Imię:</label>
                <input type="text" name="name" id="name" required>
                <br>
                <label for="surname">Nazwisko:</label>
                <input type="text" name="surname" id="surname" required>
                <br>
                <label for="address">Adres:</label>
                <input type="text" name="address" id="address" required>
                <br>
                <label for="postal_code">Kod pocztowy:</label>
                <input type="text" name="postal_code" id="postal_code" required>
                <br>
                <label for="payment_method">Forma zakupu:</label>
                <select name="payment_method" id="payment_method" required>
                    <option value="credit_card">Karta kredytowa</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash">Gotówka</option>
                </select>
                <br>
                <input type="submit" value="Zakup">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Sklep dla graczy. <a href="./contact.php">Kontakt</a></p>
    </footer>
</body>

</html>