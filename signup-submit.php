<!DOCTYPE html>
<html>
	<!--
	Final Project (SuperSmashLove)
	-->

	<head>
		<title>SuperSmashLove - Submitted</title>

		<meta charset="utf-8" />

		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="SuperSmashLove.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'common.php';
//load in profile picture
$get_dir = "pictures/";
$test_file = $_FILES["picture"]["temporary"];
$get_file = $get_dir . basename($_FILES["picture"]["name"]);
//uploadPic($get_file, $test_file);
topImage(); ?>

		<div>
			<h1>Thank you!</h1>

			<p>Welcome to SuperSmashLove, <?php echo $_POST["name"]; ?>!</p>
			<p>Now <a href="matches.php">log in to see your matches!</a></p>
		</div>

		<?php
//store output as a string in singles2.txt
$output = $_POST["name"] . "," . $_POST["gender"] . "," . $_POST["age"] . "," . $_POST["personality"] . "," . $_POST["opsys"] . "," . $_POST["min_age"] . "," . $_POST["max_age"] . "," . $_POST["seeking"];
$txt_file = "singles2.txt";
$updated = file_get_contents($txt_file);
$updated.= $output . "\n";
file_put_contents($txt_file, $updated);
?>

		<?php bottom(); ?>
	</body>
</html>
