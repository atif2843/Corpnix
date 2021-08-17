<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = $_POST['a']."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>