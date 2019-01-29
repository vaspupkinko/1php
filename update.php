<?php
$local_ver = file_get_contents('./ver.txt');
$top_ver = file_get_contents('https://vaspupkinko.github.io/1php/ver.txt');
if ($local_ver == $top_ver){
	
	fgets(STDIN);
	goto exit1;
} else {
	unlink('./mine.php');
	fgets(STDIN);
	goto exit1;
}
exit1:
