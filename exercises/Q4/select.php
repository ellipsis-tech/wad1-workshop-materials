<?php
#List of majors

$majors = [
        "SD" => "Software Development",
        "DBS" => "Digital Business Solutioning", 
        "BA" => "Business Analytics",
        "AI" => "Artificial Intelligence",
        "CS" => "Cyber Security",
        "ZY" => "ZeYuan Lifting",
        "NP" => "Nabil Programming"
        ];

        echo "<h1>Select Your Major:</h1>";
        echo "<form action='module_tracking.php' method='POST'>";
        # Write your code here
        # Make a dropdown list of the available majors using the array 


        echo "<input type='submit' value='Check'/>";
        echo "</form>";

?>