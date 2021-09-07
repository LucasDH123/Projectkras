<?php
$message = '';
function function_alert($message){
    echo "<script>alert('$message');</script>";
}

$email = $_POST['email'];
if($_SERVER['REQUEST_METHOD'] = $_POST) {
    if (empty($_POST['email'])) {
        $message = 'niks ingevuld';
        echo function_alert($message);
    }

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $message = 'Email geregistreerd';
        echo function_alert($message);
    }
    else{
        $message = 'Geen geldige email geregistreerd';
        echo function_alert($message);
    }

}

$routedescription = [
        'part1' => "vanaf het gebouw gaat u rechtdoor totdat u bij een kruising komt met een abn amro daar gaat u rechts." ,
        'part2' =>  "daarna volgt u de weg totdat u een BENU Apohtheek ziet hier slaat u rechts af." ,
        'part3' =>  "Nu hoef je alleen nog de weg te volgen tot u bij een bord komt waar ROC tilburg opstaat, nu hoeft u alleen links afteslaan en u bent er."
        ]


?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css"
          href="../CSS/infoverhuisstyle.css">
    <title>infoverhuis</title>
</head>
<body>
    <img id="logo" src="../images/Logo 3 kras .png" alt="logo" >
    <div id="left"></div>
    <div id="right"></div>

    <h1>‘Een Kras mediaconcept voor elk bedrijf.’</h1>


    <a id="first" href="../pages/info.php">Wilt u meer weten?</a>
    <a id="second" href="../pages/contact.php">contact ons</a>
    <a id="third" href="../pages/Voorbeelden.php">Zie ons werk</a>
    <a id="fourth" href="../Index.php">Terug naar home</a>

    <h2>De verhuizing</h2>
    <p class="introductie">Kras Design is door een verandering van locatie gegaan, hieronder ziet u een route beschrijving van het oude pand naar de nieuwe locatie.</p>
    <?php
    echo "<div class='myDIV'>";
        echo "<p>";

            $output = "";
            foreach($routedescription as $key => $part){
                echo $part . '<br>';

        }
            echo "</p>";
    echo "</div>";
    ?>

    <div class="hide">
        <img src = "../images/routep1.png"  id = "img1">
        <img src = "../images/routep2.png"  id = "img2">
        <img src = "../images/routep3.png"  id = "img3">
    </div>


    <form action="" method="post">
        <label for="email">Wilt u op te hoogte gehouden worden?<br>
        Vul hier u Mail in:</label>
        <input type="text" id="email" name="email"><br>
        <input type="submit" id="submit" value="Opsturen" name="submit" >
    </form>
</body>
</html>