<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$ipdat = @json_decode(file_get_contents( 
    "http://ip-api.com/json/".$ip."?fields=status,message,country,city,regionName")); 
    if ($ipdat->status === "fail"){
        $kraj = "Error";
        $miasto = $ipdat->message;
        $region = "Error";
    }
    elseif ($ipdat->status === "success"){
        $kraj = $ipdat->country;
        $miasto = $ipdat->city;
        $region = $ipdat->regionName;
    }
$aktualne = file_get_contents('lista.txt');
file_put_contents('lista.txt', "$aktualne \n\n(".date("d-m-Y h:i:s").") $ip || $kraj, $miasto || ".$_SERVER['HTTP_USER_AGENT']."");
 ?>