<?php

$today = date('d-m-Y');
$comingSoon = date('d-m-Y', strtotime('+20 days'));

echo $today."</br>".$comingSoon;