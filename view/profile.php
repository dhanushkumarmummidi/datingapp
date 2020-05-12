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
  
  $partner = '';
$matcher = $_SESSION["username"];

if(!isset($_GET['partner'])){
		echo "none found";
		return 0;
	}
	else{
		$partner = $_GET['partner'];
	}
    if(isset($_GET["wink"])){
	  $select_sel = "SELECT * FROM wink WHERE matcher_name='$matcher' AND partner_name='$partner'";
	   $db=new mysqli('localhost','root','','project_php');
	   $result = $db->query($select_sel);
                $row=array();
                if($result->num_rows == 0){
					$sql = "INSERT INTO wink (`matcher_name`, `partner_name`, `winked`) VALUES ('$matcher', '$partner', '1');";
					if($db->query($sql))
					{
						echo "You winked successfully";
					}
				}
	  
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
        <!-- product image with description -->
        <div id="product_image">
           
            <p>

            <?php 
            $db=new mysqli('localhost','root','','project_php');
            if($db->connect_error){
                die("connection failed:" .$db->connect_error);
            }
            else{
                $userid=$_GET['userid'];
                $sql="SELECT * FROM users WHERE user_id='".$userid."'";
			
                $result = $db->query($sql);
                $row=array();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
						$uName = $row['username'];
						echo " <img src='image/$uName' alt='disha' title='disha' />";
                        echo "<a><b>User Name:</b>".$row['username']."</a><br>";
      echo "<a><b>Email Address:</b>".$row['email']."</a><br>";
      echo "<a><b>Date of Birth:</b>".$row['dob']."</a><br>";
      echo "<a><b>Age:</b>".$row['age']."</a><br>";
      echo "<a><b>Gender:</b>".$row['sex']."</a><br>";
      echo "<a><b>Occupation:</b>".$row['occupation']."</a><br>";
      echo "<a><b>Education:</b>".$row['education']."</a><br>";
      echo "<a><b>Hobbies:</b>".$row['hobbies']."</a><br>";
      echo "<a><b>Role Model:</b>".$row['rolemodel']."</a><br>";
      echo "<a><b>Preferences:</b>".$row['preference']."</a><br>";
      echo "<a><b>Height:</b>".$row['height']."</a><br>";
      echo "<a><b>Weight:</b>".$row['weight']."</a><br>";
      echo "<a><b>Country:</b>".$row['country']."</a><br>";
      echo "<a><b>Zodiac:</b>".$row['zodiac']."</a><br>";

                    }
                }
            }
			
			
			$currentURL = $_SERVER['PHP_SELF'];
			  $sql="SELECT * FROM wink WHERE matcher_name='".$matcher."' and partner_name='".$partner."'";
                $result = $db->query($sql);
              
				 if($result->num_rows == 0){
            ?>
               
				<form method="get" action=<?php echo  "$currentURL"?>>
				<input type="hidden" value='<?= $userid ?>' name='userid'>
			<input type="hidden" value='<?= $partner ?>' name='wink'>
			<input type="hidden" value='<?= $partner ?>' name='partner'>
<input type="submit" align="center" value="wink" >
			</form>
			<?php
				 }
				 else{
					 echo "You have already winked this person";
				 }
			?>
            </p>
        </div>

    </main>

    <!-- footer for all the pages -->
    <?php include 'footer.php';?>
</body>
</script>

</html>