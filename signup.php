<!DOCTYPE html>
<html>
	<!--
	Final Project (SuperSmashLove)
	-->

	<head>
		<title>SuperSmashLove Come Sign Up</title>

		<meta charset="utf-8" />

<!-- link to our css file, upload images-->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="SuperSmashLove.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
    <!-- link our common.php file (will be present on every pg) -->
		<?php include 'common.php';
topImage(); ?>

		<div>

<!-- set the input boxes we are taking user input from -->
			<form action="signup-submit.php" method="post" enctype="multipart/form-data">

				<fieldset>

				<legend>New User Signup</legend>

				<!-- user name -->
				<em>Name:</em>
				<input type ="text" name="name" size="16"><br>

				<!-- user gender -->
				<em>Gender:</em>
				<input type="radio" name="gender" value="M"> Male
				<input type="radio" name="gender" value="F" checked>Female<br>

				<!-- user age  -->
				<em>Age:</em>
				<input type="text" name="age" size="6"><br>

				<!-- user personality type -->
				<em>Personality type:</em>
				<input type="text" name="personality" size="6" maxlength="4">
				<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp" target="_blank">(Don't know your type?)</a>
				<br>

				<!-- user fav Operating System -->
				<em>Favorite OS</em>
				<select name="opsys">
          <option value="Nintendo">Nintendo
          <option value="Windows">Windows
					<option value="Mac OS X">Mac OS X
					<option value="Linux">Linux

				</select>


				<br>

        <!-- check values user uploads-->
				<!-- Check age -->

				<em>Seeking age:</em>
				<input type ="text" name="min_age" value="min" size="6">
				to
				<input type ="text" name="age_max" value ="max" size="6"><br>

				<!-- check gender -->
				<em>Seeking Gender(s):</em>
				<input type="checkbox" name="seeking" value="M"> Male
				<input type="checkbox" name="seeking" value="F">Female<br>

				<!-- check picture -->
				<em>Photo:</em>
				<input type="file" name="picture" />

				<!-- check submission -->
				<input type="submit" value="Submit">
			</fieldset>
			</form>
		</div>

		<?php bottom(); ?>
	</body>
</html>
