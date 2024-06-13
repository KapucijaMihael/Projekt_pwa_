<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Skripta</title>
</head>
<body class="unos">
<div class="logo-container">
    <a href="index.php" class="logo"><img src="logo.png" alt="logo" class="logo"></a>
</div>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="kategorija.php?category=VIJESTI">Vijesti</a>
    <a href="kategorija.php?category=SPORT">Sport</a>
    <a href="login.php">Admin</a>
</div>
    <main class="unos">
        <?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "SELECT * FROM projekt WHERE id = $id";
    $result = mysqli_query($dbc, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            echo "<h1 class='clanak'>{$row['title']}</h1>";
            echo "<p class='clanak'>Datum: {$row['datum']}</p>";
            echo "<img src='img/{$row['pphoto']}' alt='Slika članka' class='clanak'>";
            echo "<h2 class='clanak'>{$row['about']}</h2>";
            echo "<p class='clanak2'>{$row['content']}</p>";
        } else {
            echo "<p>Članak nije pronađen.</p>";
        }
    } else {
        echo "<p>Greška pri dohvaćanju članka.</p>";
    }

    mysqli_close($dbc);
} else {
    echo "<p>Nije postavljen ID članka.</p>";
}
?>
</main>
<footer>
        <p style="text-align: center;">Mihael Kapučija</p>
    </footer>
</body>
</html>