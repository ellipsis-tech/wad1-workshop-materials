<?php
#List of majors

$majors = [
        "SD" => "Software Development",
        "NP" => "Nabil Programming",
        "DBS" => "Digital Business Solutioning", 
        "ZY" => "ZeYuan Lifting",
        "BA" => "Business Analytics",
        "AI" => "Artificial Intelligence",
        "CS" => "Cyber Security"
        ];

# Write your code here
# Make a dropdown list of the available majors using the array and send the form from select to module tracking
# send form to module_tracking.php
        echo "<h1>Select Your Major:</h1>";
        echo "<form action='module_tracking.php' method='POST'>";
        echo "<select name='major'>";
        foreach ($majors as $key => $value){
                echo "<option value='$key'>$value</option>";
        }
        echo "<input type='submit' value='Check'/>";
        echo "</form>";
?>