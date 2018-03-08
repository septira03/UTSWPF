<?php
	include("admin.php");
	if(isset($_POST['submit'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$login = new login($user,$pass);
		$login->adminguru();
	}	
?>

<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="css/Login.css">
    </head>
    <body>
        <div class="">
            <div class="kanan"></div>
            <form method="POST">
                <h1>LOGIN ADMIN</h1>
                <input type="text" name="username" id="username" placeholder="Username"/>
                <input type="password" name="password" id="password" placeholder="Password"/>
                <input class="btn" type="submit" name="submit" value="LOG IN"/>
                <a href=""><h7>Lupa Password ?</h7></a>
            </form>
        </div>
    </body>
</html>