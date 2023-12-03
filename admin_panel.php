<?php
session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: log_in.php?erro=Błąd Logowania');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel admina</title>
    <link rel="stylesheet" href="./styles/style_main.css">
</head>

<body>
    <header>
        <h1>Witaj, <?php echo $_SESSION['user']['username']; ?>!</h1>
        <nav>
            <ul>
                <li><a href="./index.php">Strona Główna</a></li>
                <li><a href="./games.php">Gry</a></li>
                <?php if ($_SESSION['user']['rank'] == 'admin') : ?>
                <li><a href="./admin_panel.php">Panel admina</a></li>   
                <?php endif; ?>
                <?php if (isset($_SESSION['logged_in'])) : ?>
                    <li><a href="./log_out.php">Wylogowanie</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <section class="admin-section">
            <h2>Panel admina:</h2>
            <form action="./add_game.php" method="post">
                <?php if (isset($_GET['error'])) {?>
                    <style>
                        body{
                            background-color: #9ADE7B;
                        }
                    </style>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>
                <label for="game_name">Nazwa gry:</label>
                <input type="text" id="game_name" name="game_name" required>
                <br>
                <label for="game_price">Cena gry:</label>
                <input type="number" id="game_price" name="game_price" min="0" step="0.01" required>
                <br>
                <input type="submit" value="Dodaj gre">
            </form>
            <br>
            <form action="./remove_game.php" method="post">
                <label for="game_name">Nazwa gry do usunięcia:</label>
                <input type="text" id="game_name" name="game_name" required>
                <br>
                <input type="submit" value="Usuń gre">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Sklep dla graczy. <a href="./contact.php">Kontakt</a></p>
    </footer>
</body>

</html>