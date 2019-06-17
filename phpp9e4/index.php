<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  <body>
    <?php 
    $tsp = mktime(15, 0, 0, 2, 8, 2016); ?>
    <p><?= 'Timestamp actuel : ' .time(); ?></p>
    <p><?= 'Timestamp du mardi 2. août 2016 à 15H00 : ' .$tsp; ?></p>
    
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>


<?php
// Permet d'obtenir le nombre de secondes écoulées depuis le 1er Janvier 1970.
$timestampToday = time();
/* Permet d'obtenir le nombre de secondes écoulées du 1er Janvier 1970 au 02 Août 2016 à 15H. 
 mktime(heure, minute, seconde, mois, jour, année) */
$timestamp2016 = mktime(15, 0, 0, 8, 2, 2016)
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <p><?= $timestampToday ?></p>
        <p><?= $timestamp2016 ?></p>
    </body>
</html>