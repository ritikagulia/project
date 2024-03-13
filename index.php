<?php 
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $firstname = $_Post['fName'];
    $lastname = $_Post['lName'];
    $phonenum = $_Post['PhoneNo'];
    $email = $_Post['Email'];
    $password = $_Post['Password'];

    if(!empty($email) && !empty($password) && !is_numeric($gmail)){

      $query = "insert into form(fname,lname,phoneno,email,password) values ('$firstname' , '$lastname' , '$phonenum' , '$email' , '$password')";
      mysqli_query($con,$query);

      echo "<script type= 'text/javascript'> alert('Successfully Register')</script>";
    }
    else{
      echo "<script type= 'text/javascript'> alert('Please Enter valid data.')</script>";
    }

  }

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="signup">
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form action="" method="POST">
      <label for="">First Name</label>
      <input type="text" name="fName" required>

      <label for="">Last Name</label>
      <input type="text" name="lName" required>

      <label for="">Phone No.</label>
      <input type="tel" name="PhoneNo" inputmode="tel" required>

      <label for="">Email</label>
      <input type="email" name="Email" required>

      <label for="">Password</label>
      <input type="password" name="Password" required>
      <input type="submit" name="" value="submit" class="submit">
    </form>

    <p>By clicking the Sign Up button , you agree to our <br>
      <a href="#">Terms and Condition</a> and <a href="#">Privacy & Policy</a>
    </p>

    <p>Already have an account ?<a href="login.php">Login Here👉</a></p>
  </div>
</body>

</html>