<?php include('db_connection.php') ?>
<!DOCTYPE html>
<html>
<?php include 'header.php';?>
<body>
	<header style="text-align:center" class="home_header">
        <a href=""><img src="image/logo.jpg" alt="FirstBlush Logo" title="FirstBlush" /></a><hr>
    </header>
    
    <main>
    	<div id="home_welcome" style="margin-top:100px">
    		<h1>Welcome to FirstBlush</h1>
	    	<h1>Login to Find your Match</h1><br>
            <form method="post" action="login.php">
            	<?php include('errors.php'); ?>
	    		<input style="height:20px" required type="text" name="username" placeholder="Username"><br><br>
	    		<input style="height:20px" required type="password" name="password" placeholder="Password"><br><br>
	    		<button type="submit" name="login_user" style="background-color:#232F3E;color:white;border-color:#232F3E;height:25px">Login</button><br><br><br>
	    	</form>
	    	<a href="registration.php">New user? Register</a><br><br>
	    	<a href="">Got any questions? Contact Us</a><br><br>
    	</div><hr>
    </main>
    
    <?php include 'footer.php';?>
</body>
</html>