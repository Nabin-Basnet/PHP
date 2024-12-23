<?php
$x="     hello world iam nabin basnet    ";
echo strtoupper( $x );
echo "\nto lowercase=";
echo strtolower($x);
echo "\n replece hello by everybody=";
echo str_replace("world","everybody", $x );
echo "\n reverse=";
echo strrev( $x );
echo "\n remove whitesppace=";
echo trim( $x );
echo chop( $x );
$y= explode( " ",$x );
print_r( $y );
// echo $y;
?>
