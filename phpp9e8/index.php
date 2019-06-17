<?php
// on transforme -22days en timestamp 
$newDay = strtotime('-22days');
// on instancie un nouvel objet DateTime 
$date = new DateTime();
// on lui retire (sub) un intervalle de -22 jours
$date->sub(new DateInterval('P22D'));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 8</title>
    </head>
    <body>
        <p> <?php echo date('d-m-Y',$newDay); ?></p>
        <p> <?= $date->format('d-m-Y') ?> </p>
    </body>
</html>
