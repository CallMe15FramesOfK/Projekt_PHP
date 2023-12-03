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
                <?php if (!isset($_SESSION['logged_in'])) : ?>
                <li><a href="./log_in.php">Logowanie</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['logged_in'])) : ?>
                    <li><a href="./log_out.php">Wylogowanie</a></li>
                <?php endif; ?>
            </ul>
            </nav> <?php if (isset($_SESSION['logged_in'])) : ?>
            <div class="user-welcome">
            <p>Witaj, użytkowniku</p>
            </div> <?php endif; ?>
    </header>
    <main>
        <section class="sale">
            <h2><a href="./games.php">Gry na promocji</a></h2>
            <ul>
                <li>Gra 1</li>
                <li>Gra 2</li>
                <li>Gra 3</li>
            </ul>
        </section>
        <section class="upcoming">
            <h2><a href="./games.php">Nadchodzące gry</a></h2>
            <ul>
                <li>Gra 4</li>
                <li>Gra 5</li>
                <li>Gra 6</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Sklep dla graczy. <a href="./contact.php">Kontakt</a></p>
    </footer>
</body>

</html>