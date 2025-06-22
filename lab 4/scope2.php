<?php
// Global variable
$a = 10;

function test() {
    // Local variable
    $b = 5;
    echo "Local variable: $b<br>";

    // Access global variable
    global $a;
    echo "Global variable: $a<br>";

    // Static variable
    static $c = 0;
    $c++;
    echo "Static variable: $c<br><br>";
}

// Call the function multiple times
test();
test();
test();
?>
