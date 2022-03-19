<?php
            date_default_timezone_set('Europe\London');
            $con = new PDO("mysql:host=127.0.0.1;dbname=userlogin", "root", "bi11andben");
            
            if(is_null($_COOKIE['user'])) echo '<body onload="window.location.href='."'login.php'".'">';
            else{
            $query = 'SELECT * FROM `logincookies` WHERE `sessioncookie` = "'.$_COOKIE.'"';
            $result = $con->query($query);
            if(!$row = $result->fetch(PDO::FETCH_ASSOC)) echo '<body onload="window.location.href='."'login.php'".'">';
            
            if($row['TimeUpdate']+3600 < time()) echo '<body onload="window.location.href='."'login.php'".'">';
            
            $query = "UPDATE `userlogin`.`logincookies` SET `TimeUpdate` = '".time()."' WHERE `sessioncookie` = '".$_COOKIE['user']."'";
            $con->query($query);
            
            }


?>

<body onload="window.location.href='login.php'"></body>