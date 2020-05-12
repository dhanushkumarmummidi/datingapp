<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>

<html lang="en-CA">

<?php include 'header.php';?>


<!-- body of the page -->
<body>
    <!-- header for all pages -->
  <header class="home_header">
        <a href="home.php"><img src="image/logo.jpg" alt="firstblush" title="firstblush" /></a>
        <!-- nav bar -->
        <nav class="home_nav">
            <a href="home.php">HOME</a>
            <a href="catalogue.php" style="color:orange">FIND-MATCH</a>
			<a href="winked_profiles.php" style="color:Yellow">Winked-Profiles</a>
            <a href="gallery.php">GALLERY</a>
			  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
			<?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color: white;" align="right">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <a href="login.php?logout='1'" style="color: red; ">LOGOUT</a>
			  <?php endif ?>
        </nav>
    </header>

    <!-- main -->
    <main>
        <!-- welcome text -->
        <div id="home_welcome">
            <h1>FirstBlush</h1>
            <h2>FirstBlush is making history by creating more
meaningful connections that lead to fullfilling relationships
</h2>
            <p>
                Over the last 20 years, technology has changed. The way people communicate has changed. But one thing that remains the same is firstblush’s mission: to create meaningful connections which lead to long-term love. It all started in 1997. After 35 years practicing as a clinical psychologist and counseling thousands of couples, FirshBlush founder Mr.Karthik came to believe there had to be a better way to put two people together for relationship success.
            </p>
        </div>

        <!-- multiline element 1 -->
        <div id="home">
            <a href="catalogue.php">
                <img src="image/home1.jpg" class="home1" alt="date1" />
          
            </a>
        </div>

    </main>

    <!-- footer for all the pages -->
    <?php include 'footer.php';?>
</body>

</html>