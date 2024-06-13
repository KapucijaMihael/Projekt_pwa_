
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Navigacija s Logom</title>
</head>
<body>
<div class="logo-container">
<a href="index.php" class="logo"><img src="logo.png" alt="logo" class="logo"></a>
</div>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="kategorija.php?category=VIJESTI">Vijesti</a>
    <a href="kategorija.php?category=SPORT">Sport</a>
    <a href="login.php">Admin</a>
</div>
<hr>
<?php
include 'connect.php';
define('UPLPATH', 'img/');
?>
<div class="mainbox3">
<hr class="index">
<h2>VIJESTI</h2>
<section class="vijesti">
<?php
$query = "SELECT * FROM projekt WHERE archive=0 AND category='VIJESTI' LIMIT 3";
$result = mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result)) {
    echo '<article>';
    echo '<div class="article">';
    echo '<div class="parisien_img">';
    echo '<img src="' . UPLPATH . $row['pphoto'] . '" />';
    echo '</div>';
    echo '<div class="media_body">';
    echo '<h4 class="title">';
    echo '<a href="skripta.php?id=' . $row['id'] . '">';
    echo $row['title'];
    echo '</a></h4>';
    echo '</div></div>';
    echo '</article>';
}
?>
</section>
<hr class="index">
<h2>SPORT</h2>
<section class="vijesti">
<?php
$query = "SELECT * FROM projekt WHERE archive=0 AND category='SPORT' LIMIT 3";
$result = mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result)) {
    echo '<article>';
    echo '<div class="article">';
    echo '<div class="vivre_mieux_img">';
    echo '<img src="' . UPLPATH . $row['pphoto'] . '" />';
    echo '</div>';
    echo '<div class="media_body">';
    echo '<h4 class="title">';
    echo '<a href="skripta.php?id=' . $row['id'] . '">';
    echo $row['title'];
    echo '</a></h4>';
    echo '</div></div>';
    echo '</article>';
}
?>
</div>
</section>
    <footer>
        <p style="text-align: center;">Mihael Kapučija</p>
    </footer>
</body>
</html>