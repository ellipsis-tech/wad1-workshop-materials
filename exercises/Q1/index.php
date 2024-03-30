<?php
function printTriangle($row)
{
    # printTriangle(3); would print
    #   *
    #  ***
    # *****
    # Write you code here
    for ($i = 0; $i < $row; $i++) {
        
        // Print spaces before the stars
        for ($j = 0; $j < $row - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        
        // Print stars for the current row
        for ($k = 0; $k < 2 * $i + 1; $k++) {
            echo "*";
        }
        
        // Move to the next line
        echo "<br>";
    }
}

printTriangle(3);
printTriangle(5);
printTriangle(7);
