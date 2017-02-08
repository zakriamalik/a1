<!--head php part -->
<title>Assignment 1</title>
    <meta charset="utf-8" />

<!--reference to common css libraries -->
    <link rel="stylesheet" href="css/main.css" />


<!--common php script -->
<?php
function getRandomQuote() {

	$quotes = array("Love for all, malice for none",
                 "Do your worst, for I shall do mine, then let fate & time decide between us",
                 "Nothing is impossible, even the the word IMPOSSIBLE itself suggests.. I-M-POSSIBLE");

    $x=rand(0,2);

    return $quotes[$x];
}
?>