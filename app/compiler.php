<?php
$language = strtolower($_POST['language']);
$code = $_POST['code'];

$random = substr(md5(mt_rand()), 0, 7);
$filePath = "temp/" . $random . "." . $language;
$programFile = fopen($filePath, "w");
fwrite($programFile, $code);
fclose($programFile);


 if ($language === 'python') {
     $output = shell_exec("C:/Python310/python.exe $filePath 2>&1" );
    echo ($output);
 }