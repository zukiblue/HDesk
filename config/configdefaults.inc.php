<?php
/*
$g_show_timer = ON;
 
$g_top_include_page = '';
$g_logo_image = 'images/logo.jpg';
$g_logo_url = '';

  */

$g_allowanonymouslogin = 1;
$g_anonymousaccount = 'guest';

$g_debug = 0;           // 0 - No, 1 - File, 2 - Screen
$g_debug_level = 5;
$g_debug_phpinfo = 0;

//Define your canonical domain including trailing slash!, example:
//$domain= "http(s)://127.0.0.1/"
$domain = 'http://';
if(isset($_SERVER['HTTPS']))
    if ($_SERVER["HTTPS"] == "on") 
        $domain = 'https://';
$domain = $domain.$_SERVER['SERVER_NAME'];


//Define sending email notification to webmaster
$email='youremail@example.com';
$subject='New user registration notification';
$from='From: www.example.com';

//Define Recaptcha parameters
$recaptcha_privatekey ="6LeQ7tsSAAAAAJXqNJlBTkdr06_iZY1qiw9lOWAQ";
$recaptcha_publickey = "6LeQ7tsSAAAAAGwXqfjA6_G5CjqLl64LCkII0aDw";
$recaptcha_showafter = 2; // failed attempts
        
//Define length of salt,minimum=10, maximum=35
$length_salt=15;

//maximum number of failed attempts to ban brute force attackers
$maxfailedattempt=50;

//session timeout in seconds
$sessiontimeout=1800;

////////////////////////////////////
////////////////////////////////////

$loginpage= 'login.php';
$forbiddenpage= '403forbidden.php';

?>