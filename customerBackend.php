

<link rel="stylesheet" href="myStyle.css" type="text/css">
<?php

//access the global array called $_POST to get the values from the text fields
$password = $_POST["password"];
$username = $_POST["username"];
$nuke = $_POST["nuke"];
$jugg = $_POST["jugg"];
$pap = $_POST["pap"];
$ship = $_POST["q1"];
$shipcost = 0;
$score = 0;


	if($ship == "free"){
		
		$shipcost = 0;
		$shipname = "free shipping";
	}
	if($ship == "fifty"){
		
		$shipcost = 50;
		$shipname = "$50.00";
	}
	if($ship == "five"){
		
		$shipcost = 5;
		$shipname = "$5.00";
		
	} 
	
	echo "<p> Welcome ". $username . ", your password is " . $password . "</p>";
	
	echo "<table>" . "<tr>" ;
	echo "<th> </th>";
	echo "<th> QUANTITY </th>";
	echo "<th> COST PER ITEM </th>";
	echo "<th> SUB TOTAL </th>";
	echo "</tr> <tr>";
	echo "<th> NukaCola </th>";
	echo "<th>".   $nuke   ."</th>";
	echo "<th> $9.00 </th>";
	echo "<th>$".$nuke * 9 ."</th>";
	echo "</tr> <tr>";
	echo "<th> Jugger-Nog </th>";
	echo "<th>".   $jugg   ."</th>";
	echo "<th> $12.50 </th>";
	echo "<th>$".$jugg * (12.5) ."</th>";
	echo "</tr> <tr>";
	echo "<th> Pap Drink </th>";
	echo "<th>".   $pap   ."</th>";
	echo "<th> $10.00 </th>";
	echo "<th>$".$pap * (10) ."</th>";
	echo "</tr> <tr>";
	echo "<th> Shipping </th>";
	echo "<th colspan = '2' >" .   $shipname    ." </th>";
	echo "<th>$". $shipcost ."</th>";
	echo "</tr> <tr>";
	echo "<th colspan = '3' > TOTAL COST </th>";
	echo "<th>$". (($pap * (10)) + ($nuke * 9) + ($jugg * (12.5)) + $shipcost) ."</th>";
	echo "</tr> </table>";
	
	
?>