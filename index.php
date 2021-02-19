<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
fclose($myfile);

$filename = '4.docx';
header('Content-disposition: inline');
header('Content-type: application/msword'); // not sure if this is the correct MIME type
readfile($filename);
exit;
?>
</body>
</html>