<!--WAP to make a simple calculator using switch case. -->
<?php
$a=5;
$b=5;
$choise='+';

switch ($choise) {
    case '+';
    echo "ans is:".($a + $b);
    break;
    case "-";
    echo "ans is:".($a - $b);
    break;
    case "*";
    echo "ans is:".($a * $b);
    break;
    case "/";
    echo "ans is:".($a / $b);
    break;
    
}
?>


