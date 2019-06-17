<?php
// Je convertis la date de string à timestamp ce qui permet d'obtenir le nombre de secondes écoulées du 01/01/1970 au 16/05/2016 
$dateBefore = strtotime('2016-05-16');
// j'obtiens le timestamp de la date actuelle auquel j'enlève $dateBefore.Je divise par 86400 qui est le nombre de secondes dans une journée et j'arrondi au nombre supérieur.
$difference = ceil((time() - $dateBefore) / 86400);

// J'instancie un nouvel objet dateTime avec en paramètre la date du 16 mai 2016
$firstDate = new DateTime('16-05-2016');
// J'instancie un nouvel objet dateTime qui aura par défaut la date du jour 
$secondDate = new DateTime();
// J'appelle la méthode diff qui renvoie un objet dateTime qui est la différence entre les deux dates. 
$interval = $firstDate->diff($secondDate);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Exercice 5</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div>
      <h1>Exercice 5</h1>
      <p>Afficher le nombre de jours qui sépare la date du jour avec le 16 mai 2016.</p>
    </div>
    <div>
    <p><?= $difference; ?> jours</p>
    <?php //On formate ma différence avec le %a pour obtenir le nombre de jours ?>
    <p><?= $interval->format('%a') ?> jours</p>
</div>
</body>
</html>