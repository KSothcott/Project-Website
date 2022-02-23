<html>
<head>

    <title>Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
    font-size: 40px;
    text-decoration: none;
    cursor: pointer;
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
    
    a.button {
        border: 2px solid black;
        background-color: white;
        padding: 10px;
        text-decoration: none;
        color: black;
        font-family: sans-serif;
        margin: 20px;
    }
</style>
</head>
<script>
window.onload = function()
{
    document.getElementById('username').focus();
};

</script>

<body>
    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="http://192.168.1.95/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="#" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>

     <form action="login.php" method="post">

    <div class="heading">
    <p>Login</p>
    </div>
    
     <form action="login_process.php" method="post" id="f1" name="f1">

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label style="font-family: sans-serif;">Username</label>

        <input type="text" name="username" id="username" placeholder="Enter your username" form="f1"/> <br/><br/>

        <label style="font-family: sans-serif;">Password</label>

        <input type="password" name="password" placeholder="Enter your password" form="f1"/><br/><br/> 

        <button onclick="document.getElementById('f1').submit()">Login</button>

     </form>
     
    <br /><br />
    <a href="http://192.168.1.95/kathleen/newuser.php" class="button">New user? Click here to create an account</a>
</body>
</html>