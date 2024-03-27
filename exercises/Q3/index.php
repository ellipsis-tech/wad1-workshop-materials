<?php
function oldestRichest($array)
{
    #Echo out a table using the array
    #Hint find the richest and oldest people first!
    $age = $array[0]['age'];
    $salary = $array[0]['Salary'];
    foreach ($array as $person) {
        $current_age = $person['age'];
        $current_salary = $person['Salary'];
        if ($current_age > $age) {
            $age = $current_age;
            if ($current_salary > $salary) {
                $salary = $current_salary;
            }
        }
    }
    echo "<table border='1'>";
    echo "<tr><th>S/N</th><th>Oldest</th><th>Age</th></tr>";
    $serialNo = 1;
    foreach ($array as $person) {
        if ($person['age'] == $age) {
            echo "<tr><td>$serialNo</td><td>{$person['name']}</td><td>{$person['age']}</td></tr>";
            $serialNo++;
        }
    }
    echo "</table>";
    echo "<table border='1'>";
    echo "<tr><th>S/N</th><th>Richest</th><th>Salary</th></tr>";
    $serialNo = 1;
    foreach ($array as $person) {
        if ($person['Salary'] == $salary) {
            echo "<tr><td>$serialNo</td><td>{$person['name']}</td><td>{$person['Salary']}</td></tr>";
            $serialNo++;
        }
    }
    echo "</table>";
}

$array = [
    ["name" => "Johnny", "age" => 78, "Salary" => 3000],
    ["name" => "Nibras", "age" => 41, "Salary" => 3000],
    ["name" => "Jonathan", "age" => 10, "Salary" => 780],
    ["name" => "ErCong", "age" => 78, "Salary" => 2000],
    ["name" => "Eric", "age" => 78, "Salary" => 288],
    ["name" => "Farquar", "age" => 78, "Salary" => 2000]
];

oldestRichest($array);
