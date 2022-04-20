<html>
<head>
	<title>Print List</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">
    
    <style>
    
    .heading {
		font-size: 25pt;
        text-align: center;
        font-family: "Kalam", sans-serif;
	}
	.list {
		padding: 10px; 
    	margin: 50px;
        font-family: "Kalam", sans-serif;
        cursor: text;
        width: 400px;
        border: 3px dashed #7bc9c9;
        font-size: 17pt;
	}
    .button {
        border: 2px solid black;
        background-color: white;
        padding: 10px;
        margin: 50px;
        text-decoration: none;
        text-align: center;
        color: black;
        cursor: pointer;
        width: 100px;
        font-size: 12pt;
        font-family: sans-serif;
        float: right;
    }
    .button:hover {
    background-color: #d1f1f1;
    transition: all 0.4s ease;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.10), 0 17px 50px 0 rgba(0,0,0,0.10);
    }
    @page {
    size: portrait;
    }
    
    </style>
    
<body>


    <a onclick="window.print()" class="button">Print list</a>

    <div class="list">
    <p class="heading">Shopping List:</p>
    
<?php 
    
    $filename = './lists/'.$_GET['list']; 

    $fhand = fopen($filename,"r"); 
        
    echo fgets($fhand);
    
    fclose($fhand);
?>

    </div>

</body>
</html>