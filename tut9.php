<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php
//Fun with strings!!!
$mystring = "My string!";
echo "<br>" . $mystring;

$myqoute = "This is my \"qoute\" for the day!";
echo "<br>" . $myqoute;

$mysingleqoute = 'This is my "qoute" for the day!';
echo "<br>" . $mysingleqoute;

$singleexample = 'Bob\'s idea was "dumb"';

//get the length of a string
echo "<br> The length of my name is: " . strlen("Bryan");

//position of a string
$haystack = "The position of dog in this sentence is:";
echo "<br> $haystack " . strpos($haystack,"dog");

//sub string
echo "<br> " . substr($haystack,0,2);
?>


</body>
</html>
