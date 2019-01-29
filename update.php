<?php
$local_ver = file_get_contents('./ver.txt');
$top_ver = file_get_contents('https://vaspupkinko.github.io/1php/ver.txt');
if ($local_ver == $top_ver){
	goto exit1;
} else {
	unlink('./mine.php');
	$file = file_get_contents('https://vaspupkinko.github.io/1php/mine.php');
	file_put_contents('./mine.php', $file);
	goto exit1;
}
exit1:
