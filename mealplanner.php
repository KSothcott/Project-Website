<script>

function selectday($day,$meal){
    var $outstring = "https://brendansothcott.co.uk/kathleen/mealdetails.php?day="+$day+"&meal="+$meal; 
    window.location.href=$outstring;
}

</script>

<?php

    include_once('cookiecheck.php');
    include_once('server.php');
    
    $query = 'SELECT * FROM `mealplan` WHERE `UserID` = '.$_COOKIE['UserID'];
    $result = $con->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>
<title>Meal Planner</title>
<link rel="icon" type="image/x-icon" href="favicon.ico.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
    table {
        margin-left: 50px;
        margin-right: 50px;
        width: 90%;
        font-family: sans-serif;
        border: 2px solid gray;
        border-collapse: collapse;
        
    }
    
    th {
        font-size:  20pt;
        background-color: #b3e6e6;
        border: 1px solid gray;
        border-collapse: collapse;
        width: 12.5%;
        padding: 10px;
    }
    
    td {
        font-size:  15pt;
        background-color: white;
        border: 1px solid gray;
        border-collapse: collapse;
        text-align: center;
    }
    .text {
        margin-left: 50px;
        font-size: 15pt;
        font-family: sans-serif;
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
        width: 200px;
        font-size: 12pt;
    }
    .button:hover {
    background-color: #d1f1f1;
    transition: all 0.4s ease;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.10), 0 17px 50px 0 rgba(0,0,0,0.10);
    }
    @page {
    size: landscape;
    }
</style>
</head>
<body style="background-color: white;">
    
    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="https://brendansothcott.co.uk/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="https://brendansothcott.co.uk/kathleen/settings.php" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>
    
    <div class="heading">
    <p>Meal Planner</p>
    </div>
    
    <button onclick="window.print()" class="button" style="float: right; margin-right: 120px; font-size: 15pt;">Print meal plan</button>
    <br />
    <p class="text">To view more details or edit a meal, click on it in the table<br /><br />
    Click on any of the blue boxes to change the day or meal name</p>

    <table style="cursor: pointer;">
    <tr>
        <th style="background-color: white;"></th>
        <th><div contenteditable>Monday</div></th>
        <th><div contenteditable>Tuesday</div></th>
        <th><div contenteditable>Wednesday</div></th>
        <th><div contenteditable>Thursday</div></th>
        <th><div contenteditable>Friday</div></th>
        <th><div contenteditable>Saturday</div></th>
        <th><div contenteditable>Sunday</div></th>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold; font-size: 17pt;"><div contenteditable>Breakfast</div></td>
        <td onclick="selectday('1','B')"><?php echo $row['1BName'];?></td>
        <td onclick="selectday('2','B')"><?php echo $row['2BName'];?></td>
        <td onclick="selectday('3','B')"><?php echo $row['3BName'];?></td>
        <td onclick="selectday('4','B')"><?php echo $row['4BName'];?></td>
        <td onclick="selectday('5','B')"><?php echo $row['5BName'];?></td>
        <td onclick="selectday('6','B')"><?php echo $row['6BName'];?></td>
        <td onclick="selectday('7','B')"><?php echo $row['7BName'];?></td>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold; font-size: 17pt;"><div contenteditable>Lunch</div></td>
        <td onclick="selectday('1','L')"><?php echo $row['1LName'];?></td>
        <td onclick="selectday('2','L')"><?php echo $row['2LName'];?></td>
        <td onclick="selectday('3','L')"><?php echo $row['3LName'];?></td>
        <td onclick="selectday('4','L')"><?php echo $row['4LName'];?></td>
        <td onclick="selectday('5','L')"><?php echo $row['5LName'];?></td>
        <td onclick="selectday('6','L')"><?php echo $row['6LName'];?></td>
        <td onclick="selectday('7','L')"><?php echo $row['7LName'];?></td>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold; font-size: 17pt;"><div contenteditable>Dinner</div></td>
        <td onclick="selectday('1','D')"><?php echo $row['1DName'];?></td>
        <td onclick="selectday('2','D')"><?php echo $row['2DName'];?></td>
        <td onclick="selectday('3','D')"><?php echo $row['3DName'];?></td>
        <td onclick="selectday('4','D')"><?php echo $row['4DName'];?></td>
        <td onclick="selectday('5','D')"><?php echo $row['5DName'];?></td>
        <td onclick="selectday('6','D')"><?php echo $row['6DName'];?></td>
        <td onclick="selectday('7','D')"><?php echo $row['7DName'];?></td>
    </tr>
 
    </table>


</body>
</html>