
<?php

include_once('cookiecheck.php');

    $filename = "/var/www/html/kathleen/lists/";
    $filename.=$_COOKIE['UserID']."shoppinglist.txt";
    $filehandle = fopen($filename,"a"); 
    
    fwrite($filehandle,$_POST[item]."<br />");
    fclose($filehandle);

?>

<html><body onload="window.location.href='shoppinglist.php'"></body></html>