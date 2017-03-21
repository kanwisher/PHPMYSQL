<!DOCTYPE html>
<html>
<head>
	<title>Aliens</title>
</head>
<body>
<h2> Aliens Abducted Me - Report an Abduction</h2>


<?php

	$when_it_happened = $_POST['whenithappened'];
	$how_long = $_POST['howlong'];
	$how_many = $_POST['howmany'];
	$alien_description = $_POST['aliendescription'];
	$what_they_did = $_POST['whattheydid'];
	$fang_spotted = $_POST['fangspotted'];
	$other = $_POST['other'];
	$email = $_POST['email'];
	$full_name = $_POST['firstname'] . ' ' . $_POST['lastname'];

	echo 'Thanks for submitting the form ' . $full_name . '<br />';
	echo 'You were abducted ' . $when_it_happened;
	echo ' and were gone for ' . $how_long . '<br />';
	echo 'Number of aliens: ' . $how_many . '<br />';
	echo 'Describe them: ' . $alien_description . '<br />';
	echo 'The aliens did this: ' . $what_they_did . '<br />';
	echo 'Was Fang there? ' . $fang_spotted . '<br />';
	echo 'Others comments: ' . $other . '<br />';
	echo 'Your email address is ' . $email;

?>



</body>
</html>