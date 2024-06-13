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
$category = $_GET['category'];
$query = "SELECT * FROM projekt WHERE category='$category'";
$result = mysqli_query($dbc, $query);
?>
<div class="mainbox3">
<hr class="index">
<h2><?php echo $category ?></h2>
<section class="vijesti2">
<?php
while ($row = mysqli_fetch_array($result)) {
    echo '<article>';
    echo '<div class="article">';
    echo '<div class="parisien_img">';
    echo '<img src="' . UPLPATH . $row['pphoto'] . '" />';
    echo '</div>';
    echo '<div class="media_body">';
    echo '<h2 class="title2">';
    echo '<a href="skripta.php?id=' . $row['id'] . '">';
    echo $row['title'];
    echo '</a></h2>';
    echo '</div></div>';
    echo '</article>';
}
?>
</section>