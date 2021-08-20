<?php

echo date('l j F Y');

echo "</br>";

//pour une affichage locale
setlocale(LC_TIME, 'fra_fra');
echo strftime('%A %d %B %Y');

// $d = new DateTime(); //si il n'y a pas de parametre ça sera la date actuelle


// echo date_format($d, 'g:ia \o\n l jS F Y');