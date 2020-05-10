<?php
session_start();
if (!$_SESSION["login"] == "true") {
    header("Location:login.php");
} else {
    if ($_SESSION["count"] == 1) {
        echo '<div class="alert alert-success" role="alert">
    Hoşgeldiniz ! B191210071/Ezgi BAĞCIK
 </div> ';
        $_SESSION["count"] = 0;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZGİ BAĞCIK</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" href="css/custom-style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="education.html">Eğitim Bilgileri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="aboutMe">
                    <h5 class="text-success">HAKKIMDA</h5>
                    <p>
                        Ben Ezgi Bağcık, 8 Ocak 2000 İstanbul Üsküdar'da doğdum. Sakarya Üniversitesinde Bilgisayar
                        Mühendisliği 1.sınıf öğrencisiyim. Bu sitede bana ait kişisel bilgilerim ve memleketim Tokat
                        hakkında kültürel bilgilere ulaşabileceksiniz.
                    </p>

                    <h5 class="text-success">HOBİLERİM</h5>
                    <ul class="hobies">
                        <li class="hobies-items">Doğa yürüyüşü yapmak</li>
                        <li class="hobies-items">Yeni yerler keşfetmek</li>
                        <li class="hobies-items">Kitap okumak</li>
                        <li class="hobies-items">Dans etmek</li>
                        <li class="hobies-items">Müzik dinlemek</li>
                        <li class="hobies-items">Bisiklet sürmek</li>
                        <li class="hobies-items">Film izlemek</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="aboutMe">
                    <div class="img-content">
                        <img src="img/ezgi.JPG" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                    <h5 class="text-success">Gezi Fotoğraflarım</h5>
                    <div class="img-content" style="height: 80px;">
                       <p><a href="img(gezi).html" target="_blank">Gezi fotoğraflarına gitmek için tıklayınız.</a></p></p>
                    </div>
                </div>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>