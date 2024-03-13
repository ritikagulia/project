<?php 
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user_name = $_POST['fName'];
    $lastname = $_POST['lName'];
    $num = $_POST['PhoneNo'];
    $gmail = $_POST['Email'];
    $password = $_POST['Password'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail)){

      $query = "insert into form(fName, lName, PhoneNo, Email, Password ) VALUES ('$user_name' , '$lastname' , '$num' , '$gmail' , '$password')";
      mysqli_query($con,$query);

      echo "<script type='text/javascript'> alert('Successfully Register!')</script>";
      echo "<script type='text/javascript'>window.location.href='home.php';</script>";
      exit(); // Add exit to stop further execution
    }
    else{
      echo "<script type='text/javascript'> alert('Please Enter valid data.')</script>";
    }

  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="signup.css">
</head>

<body>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup to Our Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="signup.css">
</head>

<body>
  <div class="wrapper">
    <div class="container" id="cont1">
      <div class="heading">
        <i class="fa-solid fa-xmark" id="closeBtn"></i>
        <h3>Sign Up</h3>
      </div>

      <form action="" method="post">
        <div class="txt_field">
          <input type="text"  name="fName" required>
          <span></span>
          <label>First Name</label>
        </div>

        <div class="txt_field">
          <input type="text"  name="lName" required>
          <span></span>
          <label>Last Name</label>
        </div>

        <div class="txt_field">
          <input type="email" name="Email" required>
          <span></span>
          <label>Email</label>
        </div>


        <div class="txt_field">
          <input type="tel" name="PhoneNo" required>
          <span></span>
          <label>Phone</label>
        </div>


        <div class="txt_field">
          <input type="password" name="Password" required>
          <span></span>
          <label>Confirm Password</label>
        </div>

        <div class="signUpBtn">
          <button>Sign Up</button>
        </div>
      </form>

      <div class="redirect">
        <p>Already have an account ?</p>
        <a href="login2.php">Sign In👉</a>
      </div>
    </div>
  </div>

  <script>
    const btn = document.querySelector("#closeBtn");
    btn.addEventListener("click", function () {
      window.location.href = "index.html";
    });
  </script>
</body>

</html>

</html>