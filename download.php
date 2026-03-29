<?php
$file = 'downloads.txt';
$count = file_exists($file) ? (int)file_get_contents($file) : 0;
$count++;
file_put_contents($file, $count);
header('Location: pet-feeder-app-release.zip');
exit;
?>
