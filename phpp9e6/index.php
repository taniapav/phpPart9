<?php
// La fonction cal_days_in_month(calendrier, numéro du mois, année) nous donne le nombre de jours dans le mois donné.
$february = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
   <head>
      <meta charset="utf-8" />
      <title>Exercice 6 partie 9 php</title>
   </head>
   <body>
      <p>Le mois de février 2016 comportait <?= $february ?> jours.</p>
   </body>
</html>
