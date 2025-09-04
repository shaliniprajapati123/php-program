<?php
$fruits=array("Apple"=>180,"Banana"=>60,"Mango"=>120);

asort($fruits); // sort by value
print_r($fruits);

ksort($fruits); // sort by key
print_r($fruits);
?>