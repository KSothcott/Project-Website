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



</body>
</html>