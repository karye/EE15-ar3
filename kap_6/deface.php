<?php
/**
* Byter ut ord på en webbsida
*
* PHP version 5
* @category   Skoj
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
* @link
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Defaca en sida</title>
</head>
<body>
    <?php
    $webbsida = file_get_contents("https://wwsthlm.se");
    $resultat = str_replace(" ", "_", $webbsida);
    file_put_contents("text.html", $resultat);
    ?>
</body>
</html>