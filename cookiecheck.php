<?php
            date_default_timezone_set('Europe/London');
            include_once('server.php');
            
            if(is_null($_COOKIE['cookievalue'])) echo '<body onload="window.open('."'https://brendansothcott.co.uk/kathleen/login.php','_self'".')">';
            else{
            $query = 'SELECT * FROM `logincookies` WHERE `sessioncookie` = "'.$_COOKIE['cookievalue'].'"';
        
            $result = $con->query($query);
            if(!$row = $result->fetch(PDO::FETCH_ASSOC))  echo '<body onload="window.location.href='."'https://brendansothcott.co.uk/kathleen/login.php'".'">';
            
            if($row['time']+3600 < time()) echo '<body onload="window.location.href='."'https://brendansothcott.co.uk/kathleen/login.php'".'">';
            
            $query = "UPDATE `userlogin`.`logincookies` SET `time` = '".time()."' WHERE `SessionID` = '".$_COOKIE['SessionID']."'";
            
            $con->query($query);
            
            setcookie('cookievalue',$_COOKIE['cookievalue'],time()+3600);
            setcookie('SessionID',$_COOKIE['SessionID'],time()+3600);
            setcookie('UserID',$_COOKIE['UserID'],time()+3600);
            
            }


?>

