<?php
$a1=array("1"=>"DSA","2"=>"WBP","3"=>"ES","4"=>"AM");
$a2=array("1"=>"DBS","2"=>"C");
array_splice($a1,1,2,$a2);
print_r($a1);
?>