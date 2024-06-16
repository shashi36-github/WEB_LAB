<html>
<body>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$text = "Hello world! This is a sample text.";
fwrite($myfile, $txt);
fclose($myfile);
$myfile=fopen("numfile.txt","r") or die("Unable to open file!");
$test=fgets($myfile);
$whiteSpaceCount = substr_count($test, ' ');
echo "Number of white space characters: " . $whiteSpaceCount;
fclose($myfile);



?>
</body>
</html>



