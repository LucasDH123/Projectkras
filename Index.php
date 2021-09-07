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




?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css"
          href="CSS/Homepagestyle.css">
    <title>Homepage</title>
</head>
<body>
<img id="logo" src="images/Logo 3 kras .png" alt="logo" >
<div id="left"></div>
<div id="right"></div>

<h1>‘Een Kras mediaconcept voor elk bedrijf.’ haha hoehoe</h1>


    <a id="first" href="pages/info.php">Wilt u meer weten?</a>
    <a id="second" href="pages/contact.php">contact ons</a>
    <a id="third" href="pages/Voorbeelden.php">Zie ons werk</a>
    <a id="fourth" href="pages/InfoVerhuis.php">Info verhuizing</a>
<img id="flag" src="images/english-flag.jpg" alt="flag">

<a id="Lang" href="IndexEN.php">Click here for english</a>

<h2>Ons bedrijf in een notedop</h2>

<p>
    Kras Design is een bedrijf dat voor u design nodig heden zorgt van logo's to huisstijlen Kras design zal u een mooi product leveren.
    met jaren van ervaring en een klein maar efficient team zal u niet teleurgesteld zijn in wat u te wachten staat.
    ons bedrijf zal zijn hart en ziel stoppen om u het resultaat te leveren wat u wil en meschien ook nog veel meer,
    maar ons bedrijf doet niet alleen designen wij zorgen ook dat u een domein naam kan registreren.<br><br>
    Dus wilt u een mooi design voor een website of een logo dat echt bij u past kies dan voor Kras design.


</p>

<img id="img1" src="images/OIP.jpg" alt="OIP"  >
<img id="img2" src="images/OIP2.jpg" alt="OIP" >

<form action="" method="post">
    <label for="email">Wilt u op te hoogte gehouden worden?<br>
Vul hier u Mail in:</label>
    <input type="text" id="email" name="email"><br>
    <input type="submit" id="submit" value="Opsturen" name="submit" >
</form>

</body>
</html>
