<?php
    $domein = $_GET['domein'];

    switch($domein){
        case 1;
            $domein = 'Domein geregistreerd';
            break;
        case 2;
            $domein = 'geen geldigen domein' ;
            break;
        case 3;
            $domein = '';
            break;


    }

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <title>info</title>
    <link rel="stylesheet" type="text/css"
          href="../CSS/infostyle.css">
</head>
<body>
<img id="logo" src="../images/Logo 3 kras .png" alt="logo" >
<div id="left"></div>
<div id="right"></div>

<h1>‘Een Kras mediaconcept voor elk bedrijf.’</h1>

<a id="first" href="../Index.php">terug naar home</a>
<a id="second" href="../pages/contact.php">contact ons</a>
<a id="third" href="../pages/Voorbeelden.php">Zie ons werk</a>
<a id="fourth" href="../pages/InfoVerhuis.php">Info verhuizing</a>


<form action="../PHP/check domain.php" method="post">
    <label for="domein">Vul hier een domeinnaam in om het te registreren</label><br>
    <input type="text" id="domein" name="domein"><br>
    <input type="submit" id="submit" value="Registreren" name="submit" >

    <?php echo "<h2>" . $domein . "</h2>" ; ?>
</form>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>


</body>
</html>