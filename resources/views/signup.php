<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/37e2a8fe9a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,500,600|Roboto&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="../public/css/buttons.min.css" rel="stylesheet">
    <link href="../public/css/app.css" rel="stylesheet">
    <link href="../public/css/app.min.css" rel="stylesheet">
    <link href="../public/css/title.css" rel="stylesheet">
    <link href="../public/css/load.css" rel="stylesheet">
</head>
    <body>
<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<p>Vul alle velden in!</p>';
        } else if ($_GET['error'] == "invalidmailname") {
            echo '<p>Ongeldige gebruikersnaam en e-mail!</p>';
        } else if ($_GET['error'] == "invalidmail&name") {
            echo '<p>Ongeldige gebruikersnaam!</p>';
        } else if ($_GET['error'] == "invalidname&mail") {
            echo '<p>Ongeldige e-mail!</p>';
        } else if ($_GET['error'] == "passwordcheck") {
            echo '<p>Uw wachtwoorden zijn niet gelijk!';
        } else if ($_GET['error'] == "usertaken") {
            echo '<p>Deze naam is al in gebruik!</p>';
        }
    } else if ($_GET['signup'] == "succes") {
        echo '<p>U heeft met succes een account gemaakt!</p>';
    }
?>
<div class="load-wrapper">
        <svg viewbox="0 0 100 20">
            <defs>
                <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
                    <stop offset="5%" stop-color="#a972cb" />
                    <stop offset="95%" stop-color="black" />
                </linearGradient>
                <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
                    <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">
                        <animateTransform attributeName="transform" begin="0s" dur="1.5s" type="translate" from="0,0" to="40,0" repeatCount="indefinite" />
                    </path>
                </pattern>
            </defs>
            <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)" fill-opacity="0.6">LOADING</text>
            <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">LOADING</text>
        </svg>
    </div>
    <canvas id="c">
    </canvas>
    <div class="signup">
        <div class="formulier">
        <h3>Account - Registreren</h3><br>
            <div class="labels">
                <label>Gebruikersnaam </label><br>
                <label>E-mail </label><br>
                <label>Wachtwoord </label><br>
                <label>Wachtwoord herhalen </label>
            </div>
            <form action="common/signup.php" method="post" class="registreren">
                : <input type="text" name="name" placeholder="John Williams"><br>
                : <input type="text" name="mail" placeholder="abc@example.com"><br>
                : <input type="password" name="password"><br>
                : <input type="password" name="password-repeat"><br>
                <button class="button" type="submit" name="signup-submit">Registreer</button>
            </form>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js"></script>
    <script src="../js/background.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/translate.js"></script>
    <script src="../js/lang.js"></script>
    </body>
</html>