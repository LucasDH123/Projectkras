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
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <link rel="stylesheet" type="text/css"
          href="../CSS/Contactstyle.css">
    <title>contact</title>
</head>
<body>
<img id="logo" src="../images/Logo 3 kras .png" alt="logo" >
<div id="left"></div>
<div id="right"></div>

<h1>‘Een Kras mediaconcept voor elk bedrijf.’</h1>


<a id="first" href="../pages/info.php">Wilt u meer weten?</a>
<a id="second" href="../Index.php"> terug naar home</a>
<a id="third" href="../pages/Voorbeelden.php">Zie ons werk</a>
<a id="fourth" href="../pages/InfoVerhuis.php">Info verhuizing</a>

<h2>Contact ons via deze middelen</h2>

<p>Adres:    Schoolstraat 23,  4787 AH, Balkendam.</p>
<p>email:    Krasdesign@gmail.com </p>
<p>tele:     +31 6 57121344 </p>


<img src="../images/gebouw.png" alt="building">

<form action="" method="post">
    <label for="email">Wilt u op te hoogte gehouden worden?<br>
        Vul hier u Mail in:</label>
    <input type="text" id="email" name="email"><br>
    <input type="submit" id="submit" value="Opsturen" name="submit" >

</form>
</body>
</html>
