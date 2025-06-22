<?php
$a=10;
$b=20;

echo "before swap a value is:$a";
echo "before swap b value is:$b";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "after swap a value is:$a";
echo "after swap b value is:$b";


?>