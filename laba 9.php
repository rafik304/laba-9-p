
<?php
$fd = fopen("ip.txt", 'r') or die("ошибка");
while(!feof($fd))
{
$str = htmlentities(fgets($fd));

$res = preg_match( "/\b(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]|[1-9][0-9])\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[0-9]|[1-9][0-9])\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[0-9]|[1-9][0-9])\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[0-9]|[1-9][0-9])\b/", $str, $string);

print_r($string[0]);
}

fclose($fd);
?>