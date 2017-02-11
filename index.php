<!DOCTYPE html>
<html>
<head>
	<title>Trump Soundboard</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<nav class="navbar navbar-inverse">
 	<h2 class="navtext">Trump Soundboard</h2>
</nav>

<section class = "section">

	<div class="container">


	<?php
        $sounds = array("Problem", "Loan","Success", "Sue Her", "It Is", "Websites", "Free Trade", "Syria", "Apartment", "Wall!", "Shooting", "China", "Dealers", "Im Rich", "Various", "Bike", "Iran", "Obama", "Not Nice", "China1", "Great Again", "Dead", "Slob", "Truck", "Tokyo", "Glasses", "Losers", "No");
       
		$i = 1;
		$picnum = 1;

		foreach ($sounds as $key=>$namepath) {

			echo '<audio id="'.$key.'" src="trump-sounds/'.$namepath.'.mp3"></audio>';
			echo '<button type="image"  class="buttons btn-group btn-group-lg" role="group" onclick=document.getElementById("'.$key.'").play()>'.$namepath.'</button>'; //style="background: url(trump-pics/trump'.$picnum.');"
			
			if($picnum == 5)
				$picnum = 1;

			$picnum++;
			$i++;
		}
	?>

<p>
This work has been identified as being free of known restrictions under copyright law, including all related and neighboring rights.

You can copy, modify, distribute and perform the work, even for commercial purposes, all without asking permission.

</p>


	</div>
</section>



</body>
</html>


<script>
//	document.getElementById("'")

</script>