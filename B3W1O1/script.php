<?php
	date_default_timezone_set('Europe/Amsterdam');
	$time = date("H:i");

	$hour = date("H");

	if ($hour > -1 && $hour < 6) {
		echo "<h1> Goede nacht</h1>";
		$background = "background-night";
	}

	elseif ($hour > 5 && $hour < 12) {
		echo "<h1> Goede morgen </h1>";
		$background = "background-morning";
	}

	elseif ($hour > 11 && $hour < 18) {
		echo "<h1> Goede middag </h1>";
		$background = "background-afternoon";
	}

	else {
		echo "<h1> Goede avond</h1>";
		$background = "background-evening";
	}

	echo "<p>Het is nu</p>" . $time;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<title>Goede</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class=<?echo $background?>>
	<div id="container">
		
	</div>
</body>
</html>