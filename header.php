<?php

        date_default_timezone_set('EUROPE\LONDON');
        
        $keystring='dmmJHHnjj776bjjn';
        $cookievalue = 'lsdkmcldsmclksdmcqwoeip';
        
        if(!strcmp($_COOKIE['cookievalue'],$cookievalue))
        {
            setcookie('cookievalue',$cookievalue,time()+3600);  
        }
        else
        {
            setcookie('cookievalue',"",0);
            echo '<html><body onload="window.location.href='."'login.php'".'">></body></html>';                       
        }

?>