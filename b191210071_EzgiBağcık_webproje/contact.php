<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZGİ BAĞCIK</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap&subset=latin-ext"
        rel="stylesheet">

    <link rel="stylesheet" href="css/custom-style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Hakkımda</a>
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
                    <a class="nav-link active" href="contact.php">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <form action="contact-result.php" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="aboutMe">
                        <h5 class="text-info">İLETİŞİM BİLGİLERİ</h5>
                        <br>
                        <div class="form-group">
                            <label class="font-weight-bold">Ad</label>
                            <input class="form-control" type="text"  name="name">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Soyad</label>
                            <input class="form-control" type="text" name="surname">
                            
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mail Adresi</label>
                            <input class="form-control" type="email" name="mail">
                            <button class="btn btn-info" style="float: left;" type="reset" value="Temizle">Temizle</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aboutMe">
                        <div class="form-group">
                            <label class="font-weight-bold">Mesajınız</label>
                            <textarea name="message" cols="30" rows="10"
                                style="width: 100% !important; border-radius: 8px;"  name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" style="float: right;" name="upload">Gönder</button>
                        </div>
                    </div>
                </div>
        </form>
        
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>