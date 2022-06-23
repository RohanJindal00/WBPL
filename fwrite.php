<?php
$file = "php.txt";

$data = "The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases.";

$handle = fopen($file, "w") or die("ERROR: Cannot open the file.");

fwrite($handle, $data) or die ("ERROR: Cannot write the file.");

fclose($handle);
    
echo "Data written to the file successfully.";
?>