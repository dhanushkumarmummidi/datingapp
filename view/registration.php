<?php include('db_connection.php') ?>-
<!DOCTYPE html>
<html>
<?php include 'header.php';?>
<body>

	<header style="text-align:center" class="home_header">
        <a href=""><img src="image/logo.jpg" alt="FirstBlush" title="FirstBlush" /></a><hr>
    </header>
    
    <main>
    	<div id="home_welcome" style="margin-top:70px">
    		<h1>Welcome FirstBlush</h1>
            <h1>Register to find your partner</h1><br>
            <?php
  ?>
            <form method="post" action="registration.php" enctype="multipart/form-data">
            	<?php include('errors.php'); ?>
                <label for="genderGenderSeek" ><b>I am a </b></label>
                <select class="cs" id="genderGenderSeek" name="genderGenderSeek" size="1"><option selected="selected" value="1">Man seeking a Woman</option>
<option value="2">Woman seeking a Man</option>
</select><br><br>
	    		<b>FullName:</b><input style="height:20px" required type="text" maxlength="30" name="username" value="<?php echo $username; ?>" ><br><br>
	    		<b>EmailId:</b><input style="height:20px" required type="email" maxlength="30" name="email" value="<?php echo $email; ?>"><br><br>
			  <b>Birthday:</b>	<input style="height:20px" required type="date" maxlength="30" name="dob" ><br><br>
	    		<b>Password:</b> <input style="height:20px" required type="password" minlength="5" maxlength="15" name="password"><br><br>
				<b>Confirm Password:</b> <input style="height:20px" required type="password" minlength="5" maxlength="15" name="confpassword"><br><br>
			<label for="age"><b>Age</b></label>
    <select name="Age">
        <option value="18">18-24</option>
        <option value="25">25-30</option>
        <option value="30">30+</option>
    </select><br><br>
             <b>Occupation:</b><input style="height:20px" required type="text" maxlength="30" name="occupation" value="" ><br><br>
             <b>Education:</b><input style="height:20px" required type="text" maxlength="30" name="education" value="" ><br><br>
             <b>Hobbies:</b><input style="height:20px" required type="text" maxlength="30" name="hobbies" value="" ><br><br>
             <b>Role Model:</b><input style="height:20px" required type="text" maxlength="30" name="rolemodel" value="" ><br><br>
             <b>Preference:</b><input style="height:20px" required type="text" maxlength="60" name="preference" value="" ><br><br>
             <b>Height:</b><input style="height:20px" required type="text" maxlength="30" name="height" value="" ><br><br>
             <b>Weight:</b><input style="height:20px" required type="text" maxlength="30" name="weight" value="" ><br><br>
             <b>Religion:</b><input style="height:20px" required type="text" maxlength="30" name="religion" value="" ><br><br>
             <label for="country"><b>Country</b></label>
             <select name="country">
             <option value="India">India</option>
             <option value="Canada">Canada</option>
             <option value="America">America</option>
             <option value="France">France</option>
             <option value="Germany">Germany</option>
             <option value="Spain">Spain</option>
             </select><br><br>
             <label for="zodiac"><b>Zodiac</b></label>
             <select name="zodiac">
             <option value="Aries">Aries</option>           
             <option value="Leo">Leo</option>
             <option value="Cancer">Cancer</option>
             <option value="Pisces">Pisces</option>
             <option value="Scorpio">Scorpio</option>
             <option value="Taurus">Taurus</option>
             <option value="Gemini">Gemini</option>
             <option value="Virgo">Virgo</option>
             <option value="Libra">Libra</option>           
             <option value="Capricorn">Capricorn</option>                    
             <option value="Aquarius">Aquarius</option>              
             </select><br><br>               


             
                <b> Upload Picture:</b><br> <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div><br><br>
	    		<button type="submit" name="reg_user" style="background-color:#232F3E;color:white;border-color:#232F3E;height:25px">Register</button><br><br>
	    	</form>
	    	<a href="login.php">Already a user? Login</a><br><br>
	    	<a href="">Got any questions? Contact Us</a><br>
    	</div><hr>
    </main>
    
    <?php include 'footer.php';?>
    
</body>
</html>