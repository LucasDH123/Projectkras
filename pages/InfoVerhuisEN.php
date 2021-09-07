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
        "part1" => "from the building you go straight until you get to an intersection with an abn amro there you turn right." ,
        'part2' => 'then follow the road until you see a BENU Pharmacy here you turn right.',
        'part3' => "Now all you have to do is follow the road until you reach a sign with ROC tilburg on it, now all you have to do is turn left and you are there."
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

    <h1>"A Kras media concept for every company."</h1>


    <a id="first" href="../pages/infoEN.php">Want to know more?</a>
    <a id="second" href="../pages/contactEN.php">contact us</a>
    <a id="third" href="../pages/VoorbeeldenEN.php">see our work</a>
    <a id="fourth" href="../IndexEN.php">Back to home</a>

    <h2>The move</h2>
    <p class="introductie">
        Kras Design has gone through a change of location, below you can see a route description from the old building to the new location.
    </p>
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
        <label for="email">Would you like to be kept informed?<br>
            Enter your Mail here: </label>
        <input type="text" id="email" name="email"><br>
        <input type="submit" id="submit" value="Send" name="submit" >
    </form>

</body>
</html>