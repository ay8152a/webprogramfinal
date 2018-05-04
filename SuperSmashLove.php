<!DOCTYPE html>
<html>
	<!--
	Final Project (SuperSmashLove)
	John Victor & Adonay Yacob
	This provided file is the front page that links to two of the files
	you are going to write, signup.php and matches.php.
	You can modify this file as necessary to move redundant code out to common.php.
	-->

	<head>
		<title>SuperSmashLove</title>

		<meta charset="utf-8" />

		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="SuperSmashLove.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<?php include 'common.php';
topImage(); ?>

		<div>
			<h1>Welcome!</h1>

			<ul>
				<li>

					<a href="signup.php">
						<img src="signup.png" alt="icon" width="30px" height="30px"/>
						Sign up for a new account
					</a>

				</li>

				<li>

					<a href="matches.php">
						<img src="heartbig.gif" alt="icon" />
						Check your matches
					</a>

				</li>
			</ul>
		</div>

		<?php bottom(); ?>

	</body>
</html>
