<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="part9/phpp9tp/style.css">
  </head>
  <body>
    
    <p><?= 'Date actuel en format ex : 16/05/2016 : ' .date('d/m/Y'); ?></p>
    <p><?= 'Date actuel en format ex : 16-05-16 : ' .date('d-m-y') ?></p>
    <p><?= 'Date actuel format ex : 16-5-2016 : ' .date('d-n-y') ?></p>
    <p><?= ' A l\'anglaise : ' .date('Y.m.d') ?></p>
    <p><?= ' Date comlète : ' .date('d/m/Y H:i:s') ?></p>
    <p><?= ' Jour : ' .date('l d') ?></p>
    <p><?= 'Date actuel en format ex : mardi 2 août 2016 : ' .date('l d F Y'); ?></p>
    <!-- Selon le serveur c'est fr ou fr_FR ou fr_FR.utf8 fr_FR.ISO8859-1 qui est correct.-->
    <!--Nous avons besoin pour cela de deux fonctions : strftime() pour formater la date et
    setlocale() pour préciser les informations de localisation.-->
    <!--LC_TIME est une constante prédéfinie utilisée pour formater les dates et heures avec la fonction strftime()-->
    <?php  setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO8859-1'); ?>
      <p><?= strftime('%A %d %B %Y') ?></p>
      <?php 
      $jours = array('', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi',  'vendredi', 'Samedi', 'Dimanche');
      $mois = array('', 'Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); ?>
      <p><?= $jours[date('N')]. ' ' .date('d'). ' ' .$mois[date('n')]. ' '.date('Y') ?></p>
      
      <?php 
      $tsp = mktime(0, 0, 0, 2, 1, 2016) ?>
      <p>Le nombre de jour dans le mois de février de l'année 2016 est : <?= date('t', ' '.$tsp) ?></p> 
      <?php 
      $tsp = mktime(0, 0, 0, 3, 25 + 20, 2019) ?> 
       <p>La date du jour + 20 jours est : <?= date('l d', ' '.$tsp) ?></p> 
       <?php 
      $tsp = mktime(0, 0, 0, 3, 25 - 20, 2019) ?> 
       <p>La date du jour - 20 jours est : <?= date('l d', ' '.$tsp) ?></p> 
       <?php 
       $date1 = mktime(0, 0, 0, 3, 25, 2019);
       $date2 = mktime(0, 0, 0, 5, 16, 2016); ?>
       <!--On divise la durée par 86400 pour avoir le nombre de jours, parce que le résultat est en seconde! -->
       <p>Le nombre de jour qui sépare la date du jour avec le 16 mai 2016. : <?= ($date1 - $date2)/86400 ?></p>
       
     
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>