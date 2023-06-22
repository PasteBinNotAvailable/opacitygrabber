<?php

$ip = $_SERVER["REMOTE_ADDR"];
$file = fopen("text.txt", "w");
fwrite($file, $ip);

?>