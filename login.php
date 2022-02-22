<html>
<head>

    <title>User Login</title>



</head>

<body>

     <form action="login.php" method="post">

        <h2>Login</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>Username</label>

        <input type="text" name="username" placeholder="Enter your username"> <br/><br/>

        <label>Password</label>

        <input type="password" name="password" placeholder="Enter your password"><br/><br/> 

        <button type="submit">Login</button>

     </form>

</body>
</html>