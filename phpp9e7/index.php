<?php
// on transforme +20days en timestamp 
$newDay = strtotime('+20days');
// on instancie un nouvel objet DateTime 
$date = new DateTime();
// on lui ajoute (add) un intervalle de +20 jours
$date->add(new DateInterval('P20D'));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Partie 9 Exercice 7</title>
    </head>
    <body>
        <p> <?php echo date('d-m-Y',$newDay); ?></p>
        <p> <?= $date->format('d-m-Y') ?> </p>
    </body>
</html>
