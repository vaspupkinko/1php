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
echo "(01) 1\n";
echo "(02) 2\n";
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
} elseif($pilih == "3" OR $pilih == "03") {
	echo "2.0";
	$file = file_get_contents('./ver.txt');
        echo $file;
	echo "Press".$yellow." [ENTER] ".$green."Back To menu";
		fgets(STDIN);
		goto menu;
} elseif($pilih == "4" OR $pilih == "04") {
	echo "2.0 \n";
	$local_ver = file_get_contents('./ver.txt');
	$top_ver = file_get_contents('https://vaspupkinko.github.io/1php/ver.txt');
        echo "Your version: ".$local_ver. " . \n" ;
	echo "Latest version: ".$top_ver. " . \n" ;
	if ($local_ver == $top_ver){
		echo "You have the latest ver... \n";
		fgets(STDIN);
		goto menu;
	} else {
		echo "Please, upgrade this app \n";
		fgets(STDIN);
		goto menu;
	}
} elseif($pilih == "exit" OR $pilih == "finish") {
	echo "Bye!";
	echo "Press".$yellow." [ENTER] ".$green."to exit...";
		fgets(STDIN);
		goto exit1;
} else {
        echo "error:404 comand not found \n";
        echo "Press".$yellow." [ENTER] ".$green."to move back...";
		fgets(STDIN);
	goto menu;
	
}
exit1:
