
<?php

include_once('cookiecheck.php');

    $filename = "./lists/";
    $filename.=$_COOKIE['UserID']."shoppinglist.txt";
    $filehandle = fopen($filename,"a"); 
    
    fwrite($filehandle,$_POST[item]."<br />");
    fclose($filehandle);
    
?>

<html><body onload="window.location.href='https://brendansothcott.co.uk/kathleen/shoppinglist.php'"></body></html>