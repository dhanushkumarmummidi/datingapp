<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = new mysqli('localhost', 'root', '', 'project_php');

if ($db->connect_error) {
    die("Connection failed: " .$db->connect_error);
}
echo "Connected successfully";

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confpassword']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $age = mysqli_real_escape_string($db, $_POST['Age']);
  $sex = mysqli_real_escape_string($db, $_POST['genderGenderSeek']);
  $image = $_FILES['image']['name'];
  $ext = end((explode(".", $image)));
  $occupation = mysqli_real_escape_string($db,$_POST['occupation']);
  $education = mysqli_real_escape_string($db, $_POST['education']);
  $hobbies = mysqli_real_escape_string($db,$_POST['hobbies']);
  $rolemodel = mysqli_real_escape_string($db,$_POST['rolemodel']);
  $preference = mysqli_real_escape_string($db, $_POST['preference']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $weight = mysqli_real_escape_string($db, $_POST['weight']);
  $religion = mysqli_real_escape_string($db, $_POST['religion']);
  $country =  mysqli_real_escape_string($db,$_POST['country']);
  $zodiac = mysqli_real_escape_string($db, $_POST['zodiac']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($dob)) { array_push($errors, "dob is required"); }
  if (empty($age)) { array_push($errors, "age is required"); }
  if (empty($sex)) { array_push($errors, "sex is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password,dob,age,sex,image,occupation,education,hobbies,rolemodel,preference,height,weight,religion,country,zodiac) 
  			  VALUES('$username', '$email', '$password','$dob','$age','$sex','$image','$occupation','$education','$hobbies','$rolemodel','$preference','$height','$weight','$religion','$country','$zodiac')";
      mysqli_query($db, $query);
      $target = "image/".$username.".".$ext;
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}



// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
  
  
  ?>