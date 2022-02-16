<?php

include('config.php');
include('read-arukereso.php');
include('parse-csv.php');
include('convert2xml.php');

$command = escapeshellcmd('python upload2google.py');
$output = shell_exec($command);
echo $output;


?>