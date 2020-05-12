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
	<h1 align="center">FIND YOUR PERFECT MATCH HERE</h1>
	<i><h2 align="center">“We were a perfect match. Maybe that's why we burnt out.”
― Anonymous</h2></i>
        <!-- div to show all the products in the catalogue -->
        <div id="catalogue">
            <?php 
           
            
            // connect to the database
            $db = new mysqli('localhost', 'root', '', 'project_php');
            
            if ($db->connect_error) {
                die("Connection failed: " .$db->connect_error);
            }
            
		$uName = $_SESSION['username'];
        $query = "SELECT * FROM wink where partner_name = '$uName' ";
        $result = mysqli_query($db, $query);
        if ($result->num_rows > 0) {
            // output data of each row
        
            while($row = $result->fetch_assoc()) {

                $userid=$row['matcher_name'];
                $query1 = "SELECT * FROM users where username = '$uName' ";
				$result1 = mysqli_query($db, $query1);
               if ($result1->num_rows > 0) {
            // output data of each row
			$user_id = "";
            while($row1 = $result1->fetch_assoc()) {
				$user_id = $row1['user_id'];
			}
			  echo "<a class='catalogue_thumbnail' href='profile.php?userid=".$user_id."&partner=$userid' title='Click for more details'>";
                echo  "<img src='image/$userid' alt='disha' title='disha' />";
                echo  "<h2> $userid</h2></a>";
               }


                
              
            }
               
            }
        
        ?>
           
        </div>
    </main>

    <!-- footer for all the pages -->
    <?php include 'footer.php';?>
</body>

</html>