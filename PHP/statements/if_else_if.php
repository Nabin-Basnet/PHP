<?php
$x=20;
$y= 28;
$z= 76;

if ($x > $y && $x > $z) {
    echo"x is greatest";
}
elseif ($y > $x && $y > $z) {
    echo "y is greatest";
}
else{
    echo "z is greatest";
}
?>