<?php
$img = $_POST['data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
// saving
$fileName = '/img/personajes/personaje'.date('U').'.png';
file_put_contents($fileName, $fileData);
?>