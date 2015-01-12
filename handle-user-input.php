<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$user_pushed = (int) $_REQUEST['Digits'];

        echo '<Say>Calling.</Say>';
		echo '<Dial callerID="941-787-2178" record="true">$user_pushed</Dial>';
		
	echo '</Response>';
?>
