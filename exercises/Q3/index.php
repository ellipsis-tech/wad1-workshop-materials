<?php
function oldestRichest($array){
    #Echo out a table using the array
    #Hint sort the table first!
    echo "<table border='1'>";
    echo "<tr><th>OldestRichest</th><th>Age</th><th>Salary</th></tr>";
    #Write your code here











    echo "</table";
    
}

$array = [["name" => "Adam", "age" => 23, "Salary" => 200 ] ,
    ["name" => "Ben", "age" => 41, "Salary" => 105 ] ,
    ["name" => "Collin", "age" => 10, "Salary" => 78 ] ,
    ["name" => "Darren", "age" => 78, "Salary" => 2000 ] ,
    ["name" => "Eric", "age" => 78, "Salary" => 288 ] ,
    ["name" => "Farquar", "age" => 78, "Salary" => 2000]];

oldestRichest($array);