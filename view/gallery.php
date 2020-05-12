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
    <!-- header common to all pages -->
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
	   <h1 align="center">THE GALLERY</h1>
	   <i><h2 align="center">Here are some of the couples who fell in love from FirstBlush</h2></i>
	   
        <!-- div with all the images in the gallery -->
        <div id="gallery_images">
            <a href="image/gallery/1.jpg" target="_blank">
                <img src="image/gallery/1.jpg" alt="1" title="1" />
            </a>
            
            <a href="image/gallery/2.jpg" target="_blank">
                <img src="image/gallery/2.jpg" alt="2" title="2" />
            </a>
            
            <a href="image/gallery/3.jpg" target="_blank">
                <img src="image/gallery/3.jpg" alt="3" title="3" />
            </a>
            
            <a href="image/gallery/4.jpg" target="_blank" >
                <img src="image/gallery/4.jpg" alt="4" />
            </a>
            
            <a href="image/gallery/5.jpg" target="_blank" >
                <img src="image/gallery/5.jpg"  alt="5" />
            </a>
            
            <a href="image/gallery/6.jpg" target="_blank" >
                <img src="image/gallery/6.jpg" alt="6" />
            </a>
            
            <a href="image/gallery/7.jpg" target="_blank" >
                <img src="image/gallery/7.jpg" alt="7" />
            </a>
            
            <a href="image/gallery/8.jpg" target="_blank" >
                <img src="image/gallery/8.jpg" alt="8" />
            </a>
            
            <a href="image/gallery/9.jpg" target="_blank" >
                <img src="image/gallery/9.jpg" alt="9" />
            </a>
            
            <a href="image/gallery/10.jpg" target="_blank" >
                <img src="image/gallery/10.jpg" alt="10" />
            </a>
            
            <a href="image/gallery/11.jpg" target="_blank" >
                <img src="image/gallery/11.jpg" alt="11" />
            </a>
            
            <a href="image/gallery/12.jpg" target="_blank" >
                <img src="image/gallery/12.jpg" alt="12" />
            </a>
            
            <a href="image/gallery/13.jpg" target="_blank" >
                <img src="image/gallery/13.jpg" alt="13" />
            </a>
            
            <a href="image/gallery/14.jpg" target="_blank" >
                <img src="image/gallery/14.jpg" alt="14" />
            </a>
            
            <a href="image/gallery/15.jpg" target="_blank" >
                <img src="image/gallery/15.jpg" alt="15" />
            </a>
        </div>
    </main>

    <!-- footer for all the pages -->
    <?php include 'footer.php';?>
</body>

</html>