<?php


//echo 'Email is '.$_POST['email'].'<br /> password is '.$_POST['password']; 

if(!strcmp("abc@def",$_POST['email']) && !strcmp('admin',$_POST['password']))
{
    
     echo '<body onload="window.location='."'website.php'".'"></body>';
}
else echo '<body onload="window.location='."'login.php'".'"></body>';


?>