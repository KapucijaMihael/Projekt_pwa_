<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Login</title>
</head>
<script>
    function validateForm() {
        let korisnicko_ime = document.getElementById("korisnicko_ime").value;
        let lozinka = document.getElementById("lozinka").value;
        
        document.getElementById("greskaime").innerHTML = "";
        document.getElementById("greskalozinka").innerHTML = "";

        if (korisnicko_ime === "") {
            document.getElementById("greskaime").innerHTML = "Unesite korisničko ime.";
            return false;
        }

        if (lozinka === "") {
            document.getElementById("greskalozinka").innerHTML = "Unesite lozinku.";
            return false;
        }


    }
</script>
<body class="unos">
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Konekcija nije uspjela: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];

    $sql = "SELECT lozinka, razine FROM user WHERE korisnicko_ime=?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Priprema upita nije uspjela: " . $conn->error);
    }
    $stmt->bind_param("s", $korisnicko_ime);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_password, $razina);
        $stmt->fetch();

        if ($lozinka === $stored_password) {
            if (intval($razina) === 1) {
                $_SESSION['korisnicko_ime'] = $korisnicko_ime;
                header("Location: unos.php");
                exit();
            } else {
                echo "Nemate administratorske ovlasti.";
            }
        } else {
            echo "Pogrešno ime ili lozinka.";
        }
    } else {
        echo "Korisničko ime ne postoji.";
    }

    $stmt->close();
}

$conn->close();
?>
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
<hr>
<h1 class="unos">Login</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
<div class="mainbox">
    <label for="korisnicko_ime">Korisničko ime:</label>
    <input type="text" id="korisnicko_ime" name="korisnicko_ime"><br>
    <span id="greskaime" class="greska"></span>
    <br><label for="lozinka">Lozinka:</label>
    <input type="password" id="lozinka" name="lozinka"><br>
    <span id="greskalozinka" class="greska"></span><br>
    <button type="submit">Prijavi se</button>
    <button onclick="window.location.href='registracija.php';">Registracija</button>
</div>
</form>
</main>
<footer>
    <p style="text-align: center;">Mihael Kapučija</p>
</footer>
</body>
</html>