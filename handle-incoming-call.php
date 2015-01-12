<?php
// Install the library via PEAR or download the .zip file to your project folder.
// This line loads the library
require('https://raw.githubusercontent.com/twilio/twilio-php/master/Services/Twilio.php');

$sid = "AC0e71c835f9ba6c3b33012c2f3e5b0cf0"; // Your Account SID from www.twilio.com/user/account
$token = "f6e351cf827fd248ca6e96cf9c0bccb6"; // Your Auth Token from www.twilio.com/user/account

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create(
  '9416611626', // From a valid Twilio number
  '9419620300', // Call this number

  // Read TwiML at this URL when a call connects (hold music)
  'http://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient'
);
