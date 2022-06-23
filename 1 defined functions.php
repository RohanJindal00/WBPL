<?php
echo "Rohan Jindal<br>";
function add($arg1, $arg2){
   return $arg1+$arg2;
}
$val=add(11,21);
echo "<br>Addition:". $val. "\n";
$val=add("11","18");
echo "<br>Addition: $val";
?>