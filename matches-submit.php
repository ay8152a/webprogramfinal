<!DOCTYPE html>
<html>
	<!--
	Final Project (SuperSmashLove)
	This provided file is the front page that links to two of the files
	you are going to write, signup.php and matches.php.
	You can modify this file as necessary to move redundant code out to common.php.
	-->

	<head>
		<title>SuperSmashLove - Sign Up</title>

		<meta charset="utf-8" />

		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="SuperSmashLove.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php include 'common.php';
topImage(); ?>

		<h1>Matches for <?php echo $_GET["name"]; ?></h1>

		<?php
//find the user
$info = findMe($_GET["name"]);
$text_info = file("singles2.txt");
//for each match option
foreach ($text_info as $match) {
    //seperate the line into an array
    $answer = explode(",", $match);
    //check if user and the match option to see if they match
    if (isMatch($info, $answer) == true) {
        $img = gender($answer);
?>
		<div class="match">
		<p><img src=<?=$img
?>><?=$answer[0] ?></p>
		<ul>
			<li><em>gender:</em><?=$answer[1] ?></li>
			<li><em>age:</em><?=$answer[2] ?></li>
			<li><em>type:</em><?=$answer[3] ?></li>
			<li><em>OS:</em><?=$answer[4] ?></li>
		</ul>
		</div>
		<?php
    }
} ?>

		<?php bottom(); ?>
	</body>
</html>
