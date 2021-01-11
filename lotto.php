
	<!DOCTYPE html>
	
	<html>
	
	
	<head>
			<meta charset="UTF-8">
			<meta name="author" content="Paul Scheuer">	
			<title> Probe - Schulaufgabe </title>
		
		<style>
		
			head {background-color: beige; text-align: center; font-family: Tahoma; color: darkblue}
			body {background-color: beige; font-family: Tahoma; color: darkblue}
			table, tr, td {
			background-color: lightgrey; 
			color: darkred;
			border: 1px solid black; 
			border-collapse: collapse;}
			
		</style> 
		
	</head>

	
	<body>												<!-- Lottozahlen -->

			<h1> Lottozahlen: </h1>
			<br> <hr>


		<?php														// Aufgaben 1 und 2															
			
				$ratearray = $_POST['ratearray'];
				$z1 = $_POST['ratearray']['z1'];
				$z2 = $_POST['ratearray']['z2'];
				$z3 = $_POST['ratearray']['z3'];
				$z4 = $_POST['ratearray']['z4'];
				$z5 = $_POST['ratearray']['z5'];
				$z6 = $_POST['ratearray']['z6'];
				
				$ratearray = array("$z1", "$z2", "$z3", "$z4", "$z5", "$z6");

				sort($ratearray,SORT_NUMERIC);
				
				echo "Deine Zahlen: "; 
				for($i=0; $i<6; $i++)
				echo "$ratearray[$i] &nbsp; ";
				echo "<br>" . "<hr>";


			
		?>	
		
		
		<?php														// Aufgaben 3														
				
					
					$test = 0;
					$lotto1 = rand(1,49);
					$lotto2 = rand(1,49);
					$lotto3 = rand(1,49);
					$lotto4 = rand(1,49);
					$lotto5 = rand(1,49);
					$lotto6 = rand(1,49);
					
					
					
					if ($lotto2 == $lotto1)
					{
						$lotto2 = rand(1,49);
						$test++;
					}
					else $lotto2 = $lotto2;
					
					
					if (($lotto3 == $lotto1) && ($lotto3 == $lotto2))
					{
						$lotto3 = rand(1,49);
						$test++;
					}
					else $lotto3 = $lotto3;
					
					
					if (($lotto4 == $lotto1) && ($lotto4 == $lotto2) && ($lotto4 == $lotto3))
					{
						$lotto4 = rand(1,49);
						$test++;
					}
					else $lotto4 = $lotto4;
					
					
					if (($lotto5 == $lotto1) && (lotto5 == $lotto2) && ($lotto5== $lotto3) && ($lotto5== $lotto4))
					{
						$lotto5 = rand(1,49);
						$test++;
					}
					else $lotto5 = $lotto5;
					
					
					if (($lotto6 == $lotto1) && ($lotto6 == $lotto2) && ($lotto6== $lotto3) && ($lotto6== $lotto4)&& ($lotto6== $lotto5))
					{
						$lotto6 = rand(1,49);
						$test++;
					}
					else $lotto6 = $lotto6;
					
			
				$lottozahlen = array("$lotto1", "$lotto2", "$lotto3", "$lotto4", "$lotto5", "$lotto6");

				sort($lottozahlen,SORT_NUMERIC);
				
				echo "Die Lottozahlen: "; 
				for($i=0; $i<6; $i++)
				echo "$lottozahlen[$i] &nbsp; ";
				echo "<br>" . "<hr>";


			
		?>
		
		
		<?php														// Aufgaben 4														
				
					$richtig = 0;
					
					
					
					if ($z1 == $lotto1)
					{$richtig++;}
					

					if ($z2 == $lotto2)
					{$richtig++;}
					

					if ($z3 == $lotto3)
					{$richtig++;}
					

					if ($z4 == $lotto4)
					{$richtig++;}
					
					
					if ($z5 == $lotto5)
					{$richtig++;}


					if ($z6 == $lotto6)
					{$richtig++;}
					
			
					echo "Du hast " . $richtig . " Zahlen richtig.";


			
		?>	
		
	
	<br> <hr>
	</body>		
	
	</html>