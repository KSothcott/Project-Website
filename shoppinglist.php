<?php

    include_once('cookiecheck.php');

?>
<head>
	<title>Shopping List</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">

	<style>
	.icon-bar {
    width: 100%;
    background-color: #7bc9c9;
    overflow: auto;
    }

    .icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 36px;
    }

    .icon-bar a:hover {
    background-color: #94a0a1;
    }

    .heading {
        float: center;
		font-size: 34px;
		margin: 20px;
		text-align: center;
        font-family: sans-serif;
	}
	.list { 
		padding: 10px; 
    	margin: 50px;
        font-family: "Kalam", sans-serif;
        cursor: text;
        position: absolute;
        right: 50px;
        width: 60%;
        border: 3px dashed #7bc9c9;
        padding: 10px;
        font-size: 17pt;
	}
    .button {
        border: 2px solid black;
        background-color: white;
        padding: 10px;
        margin: 20px;
        text-decoration: none;
        color: black;
        cursor: pointer;
        height: 50px;
        width: 100px;
        font-size: 12pt;
        font-family: sans-serif;
    }
    .button:hover {
    background-color: #d1f1f1;
    transition: all 0.4s ease;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.10), 0 17px 50px 0 rgba(0,0,0,0.10);
    }
    .text {
        margin: 20px;
        font-size: 12pt;
        font-family: sans-serif
    }
    .textbox {
        margin: 20px;
        padding: 10px;
        font-size: 11pt;
    }    
	</style>
</head>
<body onload="document.getElementById('item').focus()" style="background-color: white;">

    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="http://192.168.1.95/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="http://192.168.1.95/kathleen/settings.php" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>

	<div class="heading">
	<p>Shopping List</p>
	</div>
    
    <a href="http://192.168.1.95/kathleen/newlist.php" class="button">New list</a><a onclick="window.print()" class="button">Print list</a>
    <br /><br />
    
    <div class="text">
    <p>Click 'Add Item' or press enter to add an item</p>
    </div>
    
    <div class="list">
    <p>Shopping List:</p>   
<?php
    $filename = "/var/www/html/kathleen/lists/";
    $filename.=$_COOKIE['UserID']."shoppinglist.txt"; 
   
    $filehandle=fopen($filename,'r');
    $stringout = fread($filehandle, filesize($filename));
   
    echo $stringout;
    fclose($filehandle)    
?>
    </div>
    
<?php
    echo '<form action="shoppinglistprocess.php" method="post" id="f1" name="f1">';
    echo '<input class="textbox" type="text" name="item" id="item" placeholder="Add item" form="f1"/>';
    echo '<button class="button" onclick="document.getElementById('."'f1'".').submit()">Add Item</button>';
    echo '</form>';
?>

</body>
</html>