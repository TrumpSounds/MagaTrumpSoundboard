<!DOCTYPE html>
<html>
<head>
	<title>Trump Soundboard</title>
</head>
<body>

<section class = "section">
	<h2>Trump Soundboard</h2>
	<div class="container">
	<?php
        $sounds = array("trump4-1", "smallloan","trump0", "trump2", "trump6-1", "trump6", "trump8-1", "trump8", "trump9", "trump10-1", "trump10", "trump11", "trump12-1", "trump12", "trump13", "trump14-1", "trump14-2", "trump14", "trump15", "trump16", "trump17", "trump18", "trump19-1", "trump19", "trump21", "trump22-1", "trump22", "trump23");

		for ($i=0; $i < ; $i++) { 
			echo "<audio id="$sounds[i]" src="trump-sounds/$sounds[i].mp3"></audio>";
			echo "<button onclick="document.getElementById($sounds[i]).play()">Say Something</button>"
		}
	?>

	</div>
</section>

</body>
</html>