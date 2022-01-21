<?php
// $txt=ucfirst($myfile);
$myfile = fopen("test.txt", "a+") or die("Unable to open file!");
$txt =fread($myfile,filesize("test.txt"));
$txt2=mb_convert_case($txt, MB_CASE_TITLE, "UTF-8");
fwrite($myfile, $txt2);
fclose($myfile);
?>