<?php
$text = " non capisco perche funziona cosi male MAMP";
$parola = $_GET["parola"];
$nuovo_testo = str_replace($parola, "***", $text)
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo $text; ?></h1>
    <h2> <?php echo strlen($text) ?></h2>
    <h3> <?php echo $nuovo_testo; ?></h3>
    <h3>nuova lunghezza <?php echo strlen($nuovo_testo) ?></h3>
  </body>
</html>
