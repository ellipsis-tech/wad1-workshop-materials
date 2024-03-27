<?php
function oldestRichest($array){
    #Echo out a table using the array
    #Hint find the richest and oldest people first!
    


    echo "<table border='1'>";
    echo "<tr><th>S/N</th><th>Oldest</th><th>Age</th></tr>";
    # table for oldest (You just need to display the all oldest, no rankings needed)


    echo "</table>";
    echo "<table border='1'>";
    echo "<tr><th>S/N</th><th>Richest</th><th>Salary</th></tr>";
    # table for richest (You just need to display the all richest, no rankings needed)


    echo "</table>";
    
}

$array = [["name" => "Johnny", "age" => 78, "Salary" => 3000 ] ,
    ["name" => "Nibras", "age" => 41, "Salary" => 3000 ] ,
    ["name" => "Jonathan", "age" => 10, "Salary" => 780 ] ,
    ["name" => "ErCong", "age" => 78, "Salary" => 2000 ] ,
    ["name" => "PeiYing", "age" => 78, "Salary" => 288 ] ,
    ["name" => "ZeYuan", "age" => 78, "Salary" => 2000]];

oldestRichest($array);