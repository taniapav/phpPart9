<?php
//setlocale formate une date et/ou une heure suivant la localisation locale.
setlocale(LC_TIME, 'fr_FR.UTF-8');
//Permet d'afficher la date selon le setlocale
$today = strftime('%A %d %B %Y');
echo $today;
?>