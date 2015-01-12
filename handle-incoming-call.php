<?php

require('Twilio.php');

$sid = "AC0e71c835f9ba6c3b33012c2f3e5b0cf0"; 
$token = "f6e351cf827fd248ca6e96cf9c0bccb6"; 

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create(
  '9416611626', 
  '9419620300', 

  'http://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient'
);
