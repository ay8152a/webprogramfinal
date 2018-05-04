<?php
//common code for top of our page
function topImage() {
?>

<!--generate image-->
	<div id="toparea">
	<img src="nerdxing.jpg" alt="top logo" /> <br />
	Where Super Smash Players meet love
	</div>
<?php
}
?>

<!-- initialize what will be constant at the bottom of our page-->
<?php
//common code for bottom of the page
function bottom() {
?>
	<div>
		<p>
			This page is for single Super Smash challengers looking to meet and date each other!  Type in your personal information and wait for the smashy luv to begin!  Thank you for using our site.
		</p>

		<p>
			Results and page (C) Copyright SuperSmashLove Inc.
		</p>

		<ul>
			<li>
				<a href="SuperSmashLove.php">
					<img src="back.png" alt="icon" />
					Back to front page
				</a>
			</li>
		</ul>
	</div>
<?php
}
?>

<?php
//take in user input to later find matches
function findMe($name) {
    $text_info = file("singles2.txt");
    foreach ($text_info as $match) {
        $answer = explode(",", $match);
        //find the file that matches you
        if ($answer[0] == $name) {
            return $answer;
        }
    }
}
?>

<?php
//compare the user and the match option
function isMatch($user, $check) {
    //use nested if statements to check possible combinations
    // check male/female specifications
    $checkGender = $check[1];
    $prefGender = $user[7];
    if ($user != null) {
        if (preg_match("/[" . $checkGender . "]/", $prefGender)) {
            //set the age boundaries
            $minAge = $user[5];
            $maxAge = $user[6];
            $checkAge = $check[2];
            // stay within bounds specified before
            if ($minAge <= $checkAge && $checkAge <= $maxAge) {
                //stay with OS boundaries/check OS preferences
                $checkOS = $check[4];
                $userOS = $user[4];
                if (($userOS == "Windows" && $checkOS == "Windows") || ($userOS != "Windows" && $checkOS != "Windows")) {
                    //match personality boundaries/types
                    $checkPers = $check[3];
                    $userPers = $user[3];
                    //Match!
                    if (preg_match("/[" . $checkPers . "]/", $userPers)) {
                        $checkName = $check[0];
                        $userName = $user[0];
                        // you can't match with yourself
                        if ($userName != $checkName) {
                            return true;
                        }
                    }
                }
            }
        }
    }
    return false;
}
?>

<?php
//here we display our selected photo
function gender($answer) {
    $name = $answer[0];
    $name = strtolower($name);
    $name = preg_replace("/[\s]/", "_", $name);
    // check the pic
    $check = "pictures/" . $name . ".jpg";
    if (file_exists($check)) {
        $link = $check;
    }
    //set the default pic Bei gives us if user doesn't upload a pic
    else {
        if ($answer[1] == "M") {
            $link = "pictures/userm.png";
        } else {
            $link = "pictures/user.png";
        }
    }
    return $link;
}
?>
</html>
