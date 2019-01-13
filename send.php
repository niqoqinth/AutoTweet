<?php
header("Refresh:10"); // mencegah login verif
function generateRandomString($length = 5) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '#JavCode | NGAUTIS DI TWITTER! ';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// Create app and add keys from 
// https://apps.twitter.com/
$consumerKey    = '';
$consumerSecret = '';
$oAuthToken     = '';
$oAuthSecret    = '';

require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

$msg = generateRandomString();
if(strlen($msg) < 140) { 	
$t = $tweet->post('statuses/update', array('status' => $msg));
echo "Bot start every 10 secs\n";
//print_r($t);
}
?>
