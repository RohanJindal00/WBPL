<?php
$file = "Rohan.txt";
if(file_exists($file)){
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
    $content = fread($handle, "50");
    fclose($handle);
    echo $content;
} else{
    echo "ERROR: File does not exist.";
}
?>