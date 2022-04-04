<?php
$path = 'a4_toread.txt';
$file = file($path);

foreach ($file as $line) {
    echo $line;
}
?>