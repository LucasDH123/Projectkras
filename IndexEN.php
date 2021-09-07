<?php
$message = '';
function function_alert($message){
    echo "<script>alert('$message');</script>";
}

$email = $_POST['email'];
if($_SERVER['REQUEST_METHOD'] = $_POST) {
    if (empty($_POST['email'])) {
        $message = 'nothing filled in';
        echo function_alert($message);
    }

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $message = 'Email registered';
        echo function_alert($message);
    }
    else{
        $message = 'No valid email registered';
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

<h1>"A Kras media concept for every company."</h1>


    <a id="first" href="pages/infoEN.php">Want to know more?</a>
    <a id="second" href="pages/contactEN.php">contact us</a>
    <a id="third" href="pages/VoorbeeldenEN.php">See our work</a>
    <a id="fourth" href="pages/InfoVerhuisEN.php">Info move</a>
<img id="flag" src="images/flag-netherlands.jpg" alt="flag">

<a id="Lang" href="Index.php">Click hier voor Nederlands</a>

<h2>Our comapny in a nutshell</h2>

<p>
    Kras Design is a company that takes care of your design needs from logos to corporate identities Kras design will deliver you a beautiful product
    and with years of experience and a small but efficient team you will not be disappointed in what you get.
    our company will put its heart and soul to deliver you the result you want and maybe a lot more too,
    but our company does not only design and we also ensure that you can register a domain name. <br> <br>
    So if you want a nice design for a website or a logo that really suits your company, choose Kras Design.
</p>

<img id="img1" src="images/OIP.jpg" alt="OIP"  >
<img id="img2" src="images/OIP2.jpg" alt="OIP" >

<form action="" method="post">
    <label for="email">Would you like to be kept informed?<br>
        Enter your Mail here: </label>
    <input type="text" id="email" name="email"><br>
    <input type="submit" id="submit" value="Send" name="submit" >
</form>

</body>
</html>
