<?php

    include_once('cookiecheck.php');

?>
<head>
	<title>Shopping List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
	function addItem() {
		var newItem = document.createElement("div");
		newItem.innerHTML = document.getElementById("box").value;
		newItem.onclick = removeItem;
		document.getElementById("list").appendChild(newItem)
		saveList();
	}
	function removeItem() {
		document.getElementById("list").removeChild(this);
		saveList();
	}
	function saveList() {
		localStorage.storedList = document.getElementById("list").innerHTML;
	}
	function loadList() {
		document.getElementById("list").innerHTML = localStorage.storedList;
		for(var i = 0; i < list.children.length; i++) {
		list.children[i].onclick = removeItem;
		}
	}
    function clearList() {
        document.getElementById("list");
            localStorage.clear();
            location.reload();
    }
   
    function enterItem() {        
    addItem();
    document.getElementById("box").value="";
    document.getElementById("box").focus();
    } 
    
	</script>
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
		width: 100%;
		float: center; 
		padding: 10px; 
    	margin: 20px;
        font-family: sans-serif;
        cursor: pointer;
	}
  	input[type="button"] {
   		border: 2px solid black;
        background-color: white;
        font-family: sans-serif;
        padding: 10px;
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
    }
    .button:hover {
    background-color: #d1f1f1;
    transition: all 0.4s ease;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.10), 0 17px 50px 0 rgba(0,0,0,0.10);
    }
    .text {
        margin: 20px;
    }
    .textbox {
        margin: 20px;
        padding: 10px;
        font-size: 11pt;
    }    
	</style>
</head>
<body onload="document.getElementById('box').focus()">

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
	<div class="list">
    <button onclick="clearList()" class="button">New list</button><button onclick="window.print()" class="button">Print list</button>
    <br />
	</div>
    
<?php

    echo '<form action="shoppinglistprocess.php" method="post" id="f1" name="f1">';
    echo '<input class="textbox" type="text" name="item" id="item" placeholder="Add item" form="f1" onchange="document.getElementById('."'f1'".').submit()"/>';
    echo '</form>';

    $filename = "/var/www/html/kathleen/lists/";
    $filename.=$_COOKIE['UserID']."shoppinglist.txt"; 
   
    $filehandle=fopen($filename,'r');
    $stringout = fread($filehandle, filesize($filename));
   
    echo $stringout;
    fclose($filehandle)
    
?>
</body>
</html>