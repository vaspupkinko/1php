#!/data/data/com.termux/files/usr/bin/php
<?php
$local_ver = "0.0.2
";
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
} elseif ($pilih == "2" OR $pilih == "02"){
		echo "Install New Packgage\n";
		echo "Packgages To Install:  ";
		$new = fgets(STDIN);
		passthru("apt install $new");
		echo "Prees [ENTER] to move back";
		fgets(STDIN);
		goto menu;
} elseif($pilih == "3" OR $pilih == "03") {
		echo "Packgages List: \n";
		passthru("apt list");
		fgets(STDIN);
		goto menu;
} elseif($pilih == "4" OR $pilih == "04") {
		$top_ver = file_get_contents('https://vaspupkinko.github.io/1php/ver.txt');
    echo "Your version: ".$local_ver. " . \n" ;
		echo "Latest version: ".$top_ver. " . \n" ;
		if ($local_ver == $top_ver){
				echo "You have the latest ver... \n";
				fgets(STDIN);
				goto menu;
		} else {
				update_menu:
				echo "Please, upgrade this app \n \n";
				echo "DO YOU WANT TO INSTALL UPDATES??? \n";
				input("Y/N");
				$update_question = trim(fgets(STDIN));
				if($update_question == "y" OR $update_question == "Y") {
						echo "installing...";
						include('./update.php');
				} elseif ($update_question == "n" OR $update_question == "N") {
						goto menu;
				} else {
						echo "\n error \n";
						fgets(STDIN);
						goto update_menu;
				}
		}
} elseif ($pilih == "5" OR $pilih == "05") {
		$unzip = fgets(STDIN);
		passthru("unzip $unzip");
		echo "\n";
		fgets(STDIN);
		goto menu;
} elseif($pilih == "exit" OR $pilih == "finish") {
		echo "Bye!";
		echo "Press".$yellow." [ENTER] ".$green."to exit...";
		fgets(STDIN);
		goto exit1;
} elseif ($pilih == "6" OR $pilih == "06") {
		echo "\e[1;33m=========+[ Encode ]+==========	\e[0m
		\e[0;36m>> 1. base64
		>> 2. url
		>> 3. hex
		>> 4. uu\e[0m\n "
		echo "Choose: "
		$encode = fgets(STDIN);
		if ($encode == "1") {
				echo "\e[0;36mString To Encode: \e[0m";
				$base64 = base64_encode(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
				echo "\e[0;36mResult: $base64 \e[0m

				";
		} elseif ($encode == "2") {
				echo "\e[0;36mString To Encode: \e[0m";
				$url = bin2hex(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
 				$url = chunk_split($url,2,'%');
 				$url = "%".substr($url, 0, strlen($url) - 1);
				echo "string"; "\e[0;36mResult: $url \e[0m

				";
		} elseif ($encode == "3") {
				echo "\e[0;36mString To Encode: \e[0m";
				$hex = bin2hex(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
				echo "\e[0;36mResult: $hex \e[0m

				";
		} elseif ($encode == "4") {
				echo "\e[0;36mString To Encode: \e[0m";
				$uu = convert_uuencode(str_replace("\n", '', str_replace("\r", '', fgets(STDIN))));
				echo "\e[0;36mResult: $uu \e[0m	";
		}
}



else {
    echo "error:404 comand not found \n";
    echo "Press".$yellow." [ENTER] ".$green."to move back...";
		fgets(STDIN);
		goto menu;

}
exit1:
