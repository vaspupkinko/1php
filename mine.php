#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
	echo $echo." --> ";
}
menu:
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo "\n$yellow
 ______                                    
/__  __\ ___  _ __  _ __ ___   _   _ __  __
  / /   / _ \| '__|| '_ ` _ \ | | | |\ \/ /
 / /   |  __/| |   | | | | | || |_| | >  < 
 \/     \___||_|   |_| |_| |_| \__,_|/_/\_\ ";
echo "\n$blue
php\n";
echo "$red=========================== Cvar1984 ))=====(@)>".$green."\n";
echo "(01) 1\n
(02) 2\n";
echo "$red=========================== Cvar1984 ))=====(@)>".$green."\n";
input("Chose");
$pilih=trim(fgets(STDIN));
echo "$red=========================== Cvar1984 ))=====(@)>".$green."\n";
if($pilih == "1" OR $pilih == "01") {
	menu_1:
	echo "1.0";
	echo "(01) )>\n";
	echo "(02) )>\n";
	input("Chose");
	$firstchoise=trim(fgets(STDIN));
	if($firstchoise == "1" OR $firstchoise == "01") {
		echo "1.1";
		echo "Press".$yellow." [ENTER] ".$green."Back To menu";
		fgets(STDIN);
		goto menu;
	}	elseif($firstchoise == "2" OR $firstchoise == "02") {
		echo "1.2";
		echo "Press".$yellow." [ENTER] ".$green."Back To menu";
		fgets(STDIN);
		goto menu;
	} else {
		goto menu_1;
	}
} elseif($pilih == "2" OR $pilih == "02") {
	echo "2.0";
	echo "Press".$yellow." [ENTER] ".$green."Back To menu";
		fgets(STDIN);
		goto menu;
} else {
	goto menu;
}
