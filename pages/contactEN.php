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
<img id="logo" src="../images/Logo%203%20kras%20.png" alt="logo" >
<div id="left"></div>
<div id="right"></div>

<h1>"A Kras media concept for every company."</h1>


<a id="first" href="../pages/infoEN.php">Want to know more?</a>
<a id="second" href="../IndexEN.php">Back to home</a>
<a id="third" href="../pages/VoorbeeldenEN.php">See our work</a>
<a id="fourth" href="../pages/InfoVerhuisEN.php">Info move</a>

<h2>Contact us through these means</h2>

<p>Adres:    Schoolstraat 23,  4787 AH, Balkendam.</p>
<p>email:    Krasdesign@gmail.com </p>
<p>tele:     +31 6 57121344 </p>


<img src="../images/gebouw.png" alt="building">

<form action="" method="post">
    <label for="email">Would you like to be kept informed?<br>
        Enter your Mail here:</label>
    <input type="text" id="email" name="email"><br>
    <input type="submit" id="submit" value="Send" name="submit" >

</form>
</body>
</html>
