<?php
//access the global array called $_POST to get the values from the text fields
$guess1 = $_POST["q1"];
$guess2 = $_POST["q2"];
$guess3 = $_POST["q3"];
$guess4 = $_POST["q4"];
$guess5 = $_POST["q5"];
$score = 0;


	echo "QUESTION 1; What is the color of grass? <br>" ;
	echo "Your guess: " . $guess1 . "<br>";
	echo "Correct answer: green <br>" ;
	if($guess1 == "green"){
		
		$score++;
		
	}
	
	
	echo "<br>" ;
	
	echo "QUESTION 2; What color are US dollar bills? <br>" ;
	echo "Your guess: " . $guess2 . "<br>";
	echo "Correct answer: green <br>" ;
	if($guess2 == "green"){
		
		$score++;
		
	}

	echo "<br>" ;
	
	echo "QUESTION 3; What color is moss? <br>" ;
	echo "Your guess: " . $guess3 . "<br>";
	echo "Correct answer: green <br>" ;
	if($guess3 == "green"){
		
		$score++;
		
	}
	
	echo "<br>" ;
	
	echo "QUESTION 4; What color is an emerald? <br>" ;
	echo "Your guess: " . $guess4 . "<br>";
	echo "Correct answer: green <br>" ;
	if($guess4 == "green"){
		
		$score++;
		
	}
	
	echo "<br>" ;

	echo "QUESTION 5; What color is a greenhouse? <br>" ;
	echo "Your guess: " . $guess5 . "<br>";
	echo "Correct answer: clear <br>" ;
	if($guess5 == "clear"){
		
		$score++;
		
	}
	
	echo "<br>" ;
	echo  "YOUR SCORE";
	echo "<br>" ;
	echo   $score . "/5 " ;
	echo "<br>" ;
	echo   ($score / 5) * 100 . "%" ;

?>