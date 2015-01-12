<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$user_pushed = (int) $_REQUEST['Digits'];

	if (numDigits==10)
	{
		echo '<Say>Calling</Say>';
		echo '<Dial record="true">';
		echo '<Number>$user_pushed</Number>';
		echo '</Dial>';
	}
	# @start snippet
	else if (numDigits!==10)
	{
		echo '<Say>I'm sorry</Say>';
        echo '<Say>Please try again</Say>';
        echo '</Hangup>';
	}

	echo '</Response>';
?>
