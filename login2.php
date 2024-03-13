<?php
    session_start();
    include("db.php");

    

// Execute the query
    


// Fetch data from the result
    

// Assign the value to a variable
    

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $gmail = $_POST['Email'];
        $password = $_POST['Password'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail)){
             // Query to check if user exists in the database
            $query = "SELECT * FROM form WHERE Email = '$gmail'";
            $result = mysqli_query($con, $query);

            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['Password'] == $password){
                    echo "<script type='text/javascript'>alert('Login Successful!')</script>";
                    $sql = "SELECT fname FROM form where Email='$gmail'";
                    $result2 = mysqli_query($con,$sql);
                    $data = $result2->fetch_assoc();
                    $variableName = $data['fname'];
                    $_SESSION['user_name'] = $variableName;
                    echo "<script type='text/javascript'>window.location.href='papers2.php';</script>";
                    exit(); // Add exit to stop further execution
                } else {
                    echo "<script type='text/javascript'>alert('Wrong Username or Password')</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('User not found')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Please enter valid email and password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="signup.css">
</head>

<body>
  <div class="wrapper">
    <div class="container2" id="cont2">
      <div class="heading">
        <i class="fa-solid fa-xmark" id="closeBtn"></i>
        <h3>Sign In</h3>
      </div>

      <form action="" method="post">

        <div class="txt_field">
          <input type="email" name="Email" required>
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="password" name=" required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="signInBtn">
          <button>Sign In</button>
        </div>
      </form>

      <div class="redirect">
        <p>Create have an account ?</p>
        <a href="home.php">Sign Up👉</a>
      </div>
    </div>
  </div>

  <script>
    const btn = document.querySelector("#closeBtn");
    btn.addEventListener("click",function(){
      window.location.href = "home.php";
    });
  </script>
</body>

</html>