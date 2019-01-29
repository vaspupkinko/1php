#!/data/data/com.termux/files/usr/bin/php
<?php
echo "lol";
$file = file_get_contents('https://vaspupkinko.github.io/1php/mine.php');
file_put_contents('./2.php', $file);
echo "lol_end";
