<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/2e3d9b3214.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

    <title>Auto Jedynka - kontakt</title>
</head>

<body>

    <?php echo $alert; ?>

    <div class="topBar">
        <a href="#" class="fbIcon">
            <i class="fab fa-facebook-f"></i>
            <h1>Auto Jedynka</h1>
        </a>
        <div class="phoneMailContainer">
            <a href="tel:+503665669" class="phone">
                <i class="fas fa-phone-alt"></i>
                <h1 style="color:#fff;">503 665 669</h1>
            </a>
            <a href="#" class="mail">
                <i class="fas fa-envelope"></i>
                <h1>autojedynka@gmail.com</h1>
            </a>
        </div>
    </div>

    <nav>
        <div class="logo">
            <img src="img/LOGO.svg.svg">
        </div>
        <div class="list">
            <li class="links"><a href="index.html">Strona główna</a></li>
            <li class="links"><a href="offer.html">Oferta</a></li>
            <li class="links"><a href="faq.html">FAQ</a></li>
            <li class="links"><a href="kodeks.html">Dekalog EkoKierowcy</a></li>
            <li class="links"><a href="gallery.html">Galeria</a></li>
            <li class="links"><a href="contact.php">Kontakt</a></li>
            <li class="links fb">
                <a href="#">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
        </div>
        <div class="burger">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
        </div>
    </nav>

    <div class="contactContainer">
        <h2>Kontakt</h2>
        <div class="contactBox">
            <h3>Dane kontaktowe</h3>
            <div class="contactData">
                <div class="contactIconBox">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <p>503 665 669</p>
            </div>
            <div class="contactData">
                <div class="contactIconBox">
                    <i class="fas fa-envelope"></i>
                </div>
                <p>autojedynka@gmail.com</p>
            </div>
            <h3>Adres</h3>
            <div class="contactData">
                <div class="contactIconBox">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <p>OSK - Nefrytowa 5 Kraków</p>
            </div>

            <div class="contactData" style="height:100px;">
                <div class="contactIconBox">
                    <i class="fas fa-university"></i>
                </div>
                <p>Sale wykładowe - Popiełuszki 36 Kraków</p>
            </div>
        </div>
        <h1>Napisz do <span class="orange">nas</span></h1>
        <form action="" method="post">
            <p>Imię i nazwisko</p>
            <input type="text" name="name" placeholder="Imię Nazwisko" required>
            <p>Email</p>
            <input type="email" name="email" placeholder="email@example.com" required>
            <p>Wiadomość</p>
            <textarea name="message" placeholder="Napisz coś..." required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Wyślij">
        </form>
    </div>
    <div class="title">Znajdź <span class="orange">nas</span></div>
    <div id="map"></div>

    <footer>
        <div class="about2">
            <h1>Auto Jedynka</h1>
            <p>Ośrodek szkolenia kierowców działający w Krakowie już od 13 lat. Zdobywca pierwszego miejsca w
                rankingu
                szkół nauki jazdy w Krakowie w 2014 roku.</p>
            <h2> <span class="orange">Napisz</span> do nas</h2>
            <div class="mail">
                <input type="text" value="autojedynka@gmail.com" class=" mailAdress"></input>
                <button onclick="copy()" class="copy">
                    <i class="far fa-copy"></i>
                </button>
            </div>
        </div>
        <div class="contact">
            <h1>Kontakt</h1>
            <div class="contactData">
                <h2>Adres</h2>
                <h3>OSK - Nefrytowa 5 Kraków</h3>
                <h3>Sale wykładowe - Aleja Pokoju 5a</h3>
                <h2 style="margin-top:20px;">Dane kontaktowe</h2>
                <h3>Telefon: 503 665 669 </h3>
                <h3>Email: autojedynka@gmail.com</h3>
            </div>
        </div>
        <div class="menu2">
            <h1>Menu</h1>
            <div class="menuOptions">
                <a href="index.html">Strona główna</a>
                <a href="offer.html">Oferta</a>
                <a href="faq.html">FAQ</a>
                <a href="kodeks.html">Dekalog EkoKierowcy</a>
                <a href="gallery.html">Galeria</a>
                <a href="contact.html" style="color:#F58445;">Kontakt</a>
            </div>
        </div>
        <div class="copyBar">Copyright Auto Jedynka 2021 <span style="margin-left:5px;" class="orange">&copy;</span>
        </div>
    </footer>

    <script src="scripts/menu.js"></script>
    <script src="scripts/copy.js"></script>
    <script src="scripts/map.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0_gA3rsVHTOvN6xKUjWIAAqJCSL_iHTA&callback=initMap">
    </script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>