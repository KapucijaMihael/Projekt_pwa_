<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Unos</title>
    <?php
    include 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $picture = $_FILES['pphoto']['name'];
        $title = mysqli_real_escape_string($dbc, $_POST['title']);
        $about = mysqli_real_escape_string($dbc, $_POST['about']);
        $content = mysqli_real_escape_string($dbc, $_POST['content']);
        $category = mysqli_real_escape_string($dbc, $_POST['category']);
        $author = mysqli_real_escape_string($dbc, $_POST['autor']);
        $date = mysqli_real_escape_string($dbc, $_POST['datum']);
        
        $archive = isset($_POST['archive']) ? 1 : 0;

        $target_dir = 'img/' . basename($picture);
        if (move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir)) {
            $query = "INSERT INTO projekt (datum, title, about, content, pphoto, category, autor, archive) 
                      VALUES ('$date', '$title', '$about', '$content', '$picture', '$category', '$author', '$archive')";
            
            if (mysqli_query($dbc, $query)) {
                $last_id = mysqli_insert_id($dbc);
                header("Location: skripta.php?id=$last_id");
                exit();
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($dbc);
            }
        } else {
            echo "<p>Greška pri prijenosu datoteke.</p>";
        }
        
        mysqli_close($dbc);
    }
    ?>
    <script>
          function validateForm() {
        let title = document.getElementById("title").value;
        let about = document.getElementById("about").value;
        let content = document.getElementById("content").value;
        let pphoto = document.getElementById("pphoto").files;
        let category = document.getElementById("category").value;

        document.getElementById("greskatitle").innerHTML = "";
        document.getElementById("greskaabout").innerHTML = "";
        document.getElementById("greskacontent").innerHTML = "";
        document.getElementById("greskapphoto").innerHTML = "";
        document.getElementById("greskacategory").innerHTML = "";
      
        if (title.length < 5 || title.length > 30) {
            document.getElementById("greskatitle").innerHTML = "Naslov vijesti mora imati 5 do 30 znakova.";
            return false;
        }
        if (about.length < 10 || about.length > 100) {
            document.getElementById("greskaabout").innerHTML = "Kratki sadržaj vijesti mora imati 10 do 100 znakova.";
            return false;
        }
        if (content === "") {
            document.getElementById("greskacontent").innerHTML = "Tekst vijesti nesmije biti prazan.";
            return false;
        }
        if (pphoto.length === 0) {
            document.getElementById("greskapphoto").innerHTML = "Slika mora biti odabrana.";
            return false;
        }
        if (category === '') {
            document.getElementById("greskacategory").innerHTML = "Kategorija mora biti odabrana.";
            return false;
        }
    }
    </script>  
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
    <hr>
    <h1 class="unos">Nova vijest</h1>
    <hr>
        <div class="mainbox">
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="form-item">
                    <label for="title">Naslov vijesti:</label>
                    <div class="form-field">
                        <input type="text" id="title" name="title" class="form-field-textual">
                        <br><span id="greskatitle" class="greska"></span><br>
                    </div>
                </div>
                <div class="form-item">
                    <label for="about">Kratki sadržaj vijesti:</label>
                    <div class="form-field">
                        <textarea name="about" id="about" cols="30" rows="3" class="form-field-textual" maxlength="150"></textarea>
                        <br><span id="greskaabout" class="greska"></span><br>
                    </div>
                </div>
                <div class="form-item">
                    <label for="content">Sadržaj vijesti:</label>
                    <div class="form-field">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"></textarea>
                        <br><span id="greskacontent" class="greska"></span><br>
                    </div>
                </div>
                <div class="form-item">
                    <label for="pphoto">Slika: </label>
                    <div class="form-field">
                        <input type="file" id="pphoto" name="pphoto" accept="image/jpg,image/gif,image/png" class="input-text">
                        <br><span id="greskapphoto" class="greska"></span><br>
                    </div>
                </div>
                <div class="form-item">
                    <label for="category">Kategorija vijesti:</label>
                    <div class="form-field">
                        <select name="category" id="category" class="form-field-textual">
                            <option value="">Odaberi kategoriju</option>
                            <option value="VIJESTI">Vijesti</option>
                            <option value="SPORT">Sport</option>
                        </select>
                        <br><span id="greskacategory" class="greska"></span><br>
                    </div>
                </div>
                <div class="form-item">
                    <label for="autor">Autor Vijesti:</label>
                    <div class="form-field">
                        <input type="text" id="autor" name="autor" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <label for="datum">Datum Vijesti:</label>
                    <div class="form-field">
                        <input type="date" id="datum" name="datum" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <label for="archive">Spremiti u arhivu: </label>
                    <input type="checkbox" id="archive" name="archive">
                </div>
                <div class="form-item">
                    <button type="reset" value="Poništi" class="poništi">Poništi</button>
                    <button type="submit" value="Prihvati" class="unesi">Prihvati</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p style="text-align: center;">Mihael Kapučija</p>
    </footer>
</body>
</html>