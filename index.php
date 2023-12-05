<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep dla graczy</title>
    <link rel="stylesheet" href="./styles/style_main.css">
</head>

<body>
    <header>
        <h1>Sklep dla graczy</h1>
        <nav>
            <ul>
                <li><a href="./index.php">Strona Główna</a></li>
                <li><a href="./games.php">Gry</a></li>
                <?php if (isset($_SESSION['logged_in'])) :
                    if ($_SESSION['user']['rank'] === 'admin') : ?>
                <li><a href="./admin_console.php">Panel admina</a></li>   
                <?php endif; endif;?>
                <li><a href="./order.php">Zakup</a></li>
                <?php if (!isset($_SESSION['logged_in'])) : ?>
                <li><a href="./log_in.php">Logowanie</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['logged_in'])) : ?>
                    <li><a href="./log_out.php">Wylogowanie</a></li>
                <?php endif; ?>
            </ul>
            </nav> <?php if (isset($_SESSION['logged_in'])) : ?>
            <div class="user-welcome">
            <p>Witaj, <?php echo $_SESSION['user']['username']; ?></p>
            </div> <?php endif; ?>
    </header>
    <main>
        <section class="about">
            <h2>O sklepie:</h2>
            <p>Sklep dla graczy to miejsce, gdzie każdy znajdzie coś dla siebie. <br>
            Sprzedajemy zarówno klasyczne, jak i nowoczesne gry. <br>
            Chcemy, aby wszyscy odnaleźli coś dla siebie w naszym sklepie. <br>
            Więc przeglądaj naszą ofertę i sprawdź, czy jesteśmy właściwym miejscem dla Ciebie!</p>
        </section>
        <section class="highlight">
            <h2><a href="./games.php">Wyróżnione gry:</a></h2>
            <ul>
                <?php
                include "./PHP_connections/connection.php";
                $sql = "SELECT * FROM games WHERE game_price > 50.00";
                $result = $conn->query($sql);
                if ($result->rowCount() > 0) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<li>" . $row["game_name"], " ", $row["game_price"], " PLN.". "</li>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Sklep dla graczy. <a href="./contact.php">Kontakt</a></p>
    </footer>
</body>

</html>