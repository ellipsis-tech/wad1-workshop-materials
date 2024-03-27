<?php
function printTriangle($row)
{
    # printTriangle(3); would print
    #   *
    #  ***
    # *****
    # Write you code here
    for ($i = 1; $i <= $row; $i++) {
        // Print spaces
        for ($j = $row - $i; $j > 0; $j--) {
            echo "&nbsp;";
        }
        // Print stars
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

printTriangle(3);
printTriangle(5);
printTriangle(7);
