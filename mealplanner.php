<script>

function selectday($day,$meal){
    var $outstring = "mealdetails.php?day="+$day+"&meal="+$meal; 
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
        font-size:  17pt;
        background-color: white;
        border: 1px solid gray;
        border-collapse: collapse;
    }
</style>
</head>
<body>
    
    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="http://192.168.1.95/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="http://192.168.1.95/kathleen/settings.php" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>
    
    <div class="heading">
    <p>Meal Planner</p>
    </div>
    
    <table>
    <tr>
        <th style="background-color: white;"></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold;">Breakfast</td>
        <td onclick="selectday('1','B')"><?php echo $row['1BName'];?></td>
        <td onclick="selectday('2','B')"><?php echo $row['2BName'];?></td>
        <td onclick="selectday('3','B')"><?php echo $row['3BName'];?></td>
        <td onclick="selectday('4','B')"><?php echo $row['4BName'];?></td>
        <td onclick="selectday('5','B')"><?php echo $row['5BName'];?></td>
        <td onclick="selectday('6','B')"><?php echo $row['6BName'];?></td>
        <td onclick="selectday('7','B')"><?php echo $row['7BName'];?></td>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold;">Lunch</td>
        <td onclick="selectday('1','L')"><?php echo $row['1LName'];?></td>
        <td onclick="selectday('2','L')"><?php echo $row['2LName'];?></td>
        <td onclick="selectday('3','L')"><?php echo $row['3LName'];?></td>
        <td onclick="selectday('4','L')"><?php echo $row['4LName'];?></td>
        <td onclick="selectday('5','L')"><?php echo $row['5LName'];?></td>
        <td onclick="selectday('6','L')"><?php echo $row['6LName'];?></td>
        <td onclick="selectday('7','L')"><?php echo $row['7LName'];?></td>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold;">Dinner</td>
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