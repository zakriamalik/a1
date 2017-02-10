<?php
function getRandomQuote() {
	//array declaration and load up with data
	$quotes = ["Love for all, malice for none (Lincoln)",
              "Do your worst, for I shall do mine, then let fate & time decide between us (Unknown)",
              "Nothing is impossible, even the the word IMPOSSIBLE itself suggests.. I-M-POSSIBLE (Unknown)",
							"We are what we repeatedly do; excellence, then, is not an act but a habit (Aristotle)",
							"You must be the change you wish to see in the world (Ghandi)",
							"Try not to become a man of success, but rather try to become a man of value (Einstein)"];
	//variable with a max number based on objects in the array
	$arraySize = Count($quotes)-1;
	//variable with the assignment of random number from zero to a max based on array size
  $x=rand(0,$arraySize);
	//return the array object based on the random number generated from above statement
  return $quotes[$x];
}
