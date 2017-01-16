<?php 

$ip = readline("Target Domain name Or Ip :");
$ch = curl_init();                    
    $url = "http://domains.yougetsignal.com/domains.php"; 
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, true); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, "remoteAddress=$ip"); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $output = curl_exec ($ch); 
    curl_close ($ch); 

   $x = $output; 

$y=json_decode($x);

echo "\033[1;33m


+----------------------------------------------------------------------------+
|                                                                            |
|                 __       __                    __                          |
|           .----|__.--.--|__.-----.______.-----|  |--.-----.                |
|           |   _|  |  |  |  |  _  |______|  _  |     |  _  |                |
|           |__| |__|\___/|__|   __|      |   __|__|__|   __|                |
|                            |__|         |__|        |__|                   |
|                    reverse ip lookup php script                            |
|                         coded by @mdp4rv3z                                 |
|            Greetz : BD_inj3c70r;C0de-X hunt3r;M@gnific0                    |
|                                                                            |
+----------------------------------------------------------------------------+
\033[0m";
echo PHP_EOL;
echo "\033[0;33m[~]\033[0m"."Total Domain Found:"."\033[31m $y->domainCount \033[0m".PHP_EOL;
echo "\033[0;33m[~]\033[0m"."Target Ip Address:"."\033[31m $y->remoteIpAddress \033[0m".PHP_EOL;
echo PHP_EOL;


$z = count($y->domainArray);
for ($k=0;$k<$z;$k++){
	echo"\033[1;32m[+]\033[0m".$y->domainArray[$k][0].PHP_EOL;
	   

	}

?>
