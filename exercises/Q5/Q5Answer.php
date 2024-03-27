<html>
<body>
    <?php
        $courses = [
        "SIS" => "Bachelor of Integrative Studies",
        "SOA" => "Bachelor of Accountancy", 
        "SOB" => "Bachelor of Business Management",
        "SOE" => "Bachelor of Science (Economics)",
        "SCIS" => "Bachelor of Science (Information Systems)",
        "SOL" => "Bachelor of Laws",
        "KEKW" => "Bachelor of Johnny Studies"
        ];
    ?>
	<h1>SMU withdrawl form</h1>
	<form action='' method='GET'>
        <!-- create an input text field to take the student's name-->
		<!-- create radiobuttons for the avaiable courses using the array (and retain the option))-->
        <!-- allow the users to click on the words to select the radio buttons-->
        <?php

            if(isset($_GET['school']) && $_GET['studentName'] != ''){
                $studentName = $_GET['studentName'];
                echo "Student Name<input type='text' name='studentName' value='$studentName' /><br>";
                foreach($courses as $key => $value){
                    if ($_GET['school'] == $key){
                        echo "<input type='radio' name='school' id='$key' value='$key' checked /><label for='$key'>$value</label><br>";
                    }else{
                        echo "<input type='radio' name='school' id='$key' value='$key' /><label for='$key'>$value</label><br>";
                    }
                }
            }else{
                echo "Student Name<input type='text' name='studentName'/><br>";
                foreach($courses as $key => $value){
                    echo "<input type='radio' name='school' id='$key' value='$key'><label for='$key'>$value</label><br>";
                }
            }

        ?>
        <br>
        <input type="submit" value="GET ME OUT!"/>
    </form>

	<?php
		# self calling form to retain the option for radio button
		# display student name followed by the course they chose to withdraw from
        if (empty($_GET) == false){
            if(isset($_GET['school']) && $_GET['studentName'] != ''){
                $studentName = $_GET['studentName'];
                $school = $courses["{$_GET['school']}"];
                echo "$studentName successfully withdrawn from the $school programme.";
            }elseif ($_GET['studentName'] != ''){
                echo "Input student name.";
            }
        }
    ?>

</body>
</html>