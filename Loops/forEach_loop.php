<?php
// The foreach loop - Loops through a block of code for each element in 
//an array or each property in an object.
$colors=array("red","blue","green","yellow","pink","orange") ;

foreach($colors as $c){
    echo "$c \n";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y \n";
}
?>