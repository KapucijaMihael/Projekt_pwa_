<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Registracija</title>
</head>
<body class="unos">
<script>
      function validateForm() {
        let ime = document.getElementById("ime").value;
        let prezime = document.getElementById("prezime").value;
        let korisnicko_ime = document.getElementById("korisnicko_ime").value;
        let lozinke = document.getElementById("lozinka").files;
        let potvrda_lozinke = document.getElementById("potvrda_lozinke").value;

        document.getElementById("greskaime").innerHTML = "";
        document.getElementById("greskaprezime").innerHTML = "";
        document.getElementById("greskakorisnicko_ime").innerHTML = "";
        document.getElementById("greskalozinka").innerHTML = "";
        document.getElementById("greskapotvrda").innerHTML = "";
      
        if (ime === "") {
            document.getElementById("greskaime").innerHTML = "Unesite ime.";
            return false;
        }

        if (prezime === "") {
            document.getElementById("greskaprezime").innerHTML = "Unesite prezime.";
            return false;
        }

        if (korisnicko_ime === "") {
            document.getElementById("greskakorisnicko_ime").innerHTML = "Unesite korisničko ime.";
            return false;
        }
        
        if (lozinka === "") {
            document.getElementById("greskalozinka").innerHTML = "Unesite lozinku.";
            return false;
        }
        
        if (potvrda === "") {
            document.getElementById("greskapotvrda").innerHTML = "Ponovno unesite lozinku.";
            return false;
        }
      }
</script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Konekcija nije uspjela: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];
    $potvrda_lozinke = $_POST['potvrda_lozinke'];

    if ($lozinka !== $potvrda_lozinke) {
        echo "Lozinke se ne podudaraju.";
    } else {
        $sql = "SELECT id FROM user WHERE korisnicko_ime=?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Priprema upita nije uspjela: " . $conn->error);
        }
        $stmt->bind_param("s", $korisnicko_ime);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "Korisničko ime se već koristi.";
        } else {
            $sql = "INSERT INTO user (ime, prezime, korisnicko_ime, lozinka) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if ($stmt === false) {
                die("Priprema upita nije uspjela: " . $conn->error);
            }
            $stmt->bind_param("ssss", $ime, $prezime, $korisnicko_ime, $lozinka);

            if ($stmt->execute()) {
                echo "Registracija je uspješna.";
            } else {
                echo "Došlo je do greške: " . $conn->error;
            }
        }

        $stmt->close();
    }
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
<h1 class="unos">Registracija</h1>
<hr>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
<div class="mainbox">
    <label for="ime">Ime:</label>
    <input type="text" id="ime" name="ime" ><br>
    <span id="greskaime" class="greska"></span><br>
    <label for="prezime">Prezime:</label>
    <input type="text" id="prezime" name="prezime" ><br>
    <span id="greskaprezime" class="greska"></span><br>
    <label for="korisnicko_ime">Korisničko ime:</label>
    <input type="text" id="korisnicko_ime" name="korisnicko_ime" ><br>
    <span id="greskakorisnicko_ime" class="greska"></span><br>
    <label for="lozinka">Lozinka:</label>
    <input type="password" id="lozinka" name="lozinka" ><br>
    <span id="greskalozinka" class="greska"></span><br>
    <label for="potvrda_lozinke">Potvrda lozinke:</label>
    <input type="password" id="potvrda_lozinke" name="potvrda_lozinke" ><br>
    <span id="greskapotvrda" class="greska"></span><br>
    <button type="submit">Registriraj se</button>
</div>
</form>
</main>
<footer>
    <p style="text-align: center;">Mihael Kapučija</p>
</footer>
</body>
</html>