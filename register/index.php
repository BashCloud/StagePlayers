<?php

// Getting the information
$ipaddress = $_SERVER['REMOTE_ADDR'];
$page = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
if(!empty($_SERVER['QUERY_STRING']))
    $page .= "?{$_SERVER['QUERY_STRING']}";
$referrer = $_SERVER['HTTP_REFERER'];
$datetime = mktime();
$useragent = $_SERVER['HTTP_USER_AGENT'];
$remotehost = @getHostByAddr($ipaddress);

// Create log line
$logline = $ipaddress . ' | ' . $referrer . ' | ' . $datetime . ' | ' . $useragent . ' | ' . $remotehost . ' | ' . $page . "\n";

echo $logline;

// Write to log file:
$logfile = 'log.txt';

// Open the log file in "Append" mode
if (!$handle = fopen($logfile, 'a+')) {
die("Failed to open log file");
}

// Write $logline to our logfile.
if (fwrite($handle, $logline) === FALSE) {
die("Failed to write to log file");
}

fclose($handle);

header('Location: '."https://docs.google.com/forms/d/e/1FAIpQLSc9pIXLP0-FFsS1QqVnBwjEE__yWF-W_l9KvIy7Xpn9DsxmAg/viewform?usp=sf_link");

?>	

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pulkit Aggarwal">
    <title>Pulkit Aggarwal MSP video</title>
    <meta name="description" content="MSP program had continuously motivated us to remain a step ahead in the field of technology. It's like a golden opportunity to transmit the same motivation to the fresh minds and direct them to move two steps ahead in the major technological aspects.">
    <META http-equiv="refresh" content="0; URL='https://docs.google.com/forms/d/e/1FAIpQLSc9pIXLP0-FFsS1QqVnBwjEE__yWF-W_l9KvIy7Xpn9DsxmAg/viewform?usp=sf_link'" />
    <link rel="shortcut icon" href="../favicon.ico">
</head>

<body>
<style>
body{
  width:95vw;
  height:100vh;
  background-color:#171717;
}
a{
  text-decoration:none;
}
#myBtn{
  padding:20px;
  background-color:#e74c3c;
  color: #e7e7e7;
  text-decoration:none;
  display:inline;
  position:absolute;
  top:40%;
  left:45%;
}
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
.fade-in {
  opacity:0;
  opacity: 1 \9; /*just in case ie*/
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:0.4s;
  -moz-animation-duration:0.4s;
  animation-duration:0.4s;
  
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  animation-delay: 2s;
}
</style>
	<BR>
<a href="https://docs.google.com/forms/d/e/1FAIpQLSc9pIXLP0-FFsS1QqVnBwjEE__yWF-W_l9KvIy7Xpn9DsxmAg/viewform?usp=sf_link">
<div id="myBtn" class="fade-in"> Click here to proceed </div>
</a>
</body>    
</html>
	