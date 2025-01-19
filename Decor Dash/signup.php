<?php
    include'connect.php';
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="insert into `signup`(`name`,`email`, `password`) VALUES ('$name','$email','$password')";
        $result=mysqli_query($con,$sql);

        if($result){
            echo" Signed In Successfully";
        }
        else{
            die(mysqli_error($con));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="decor.css">
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <section class="nav-bar">
        <div class="logo">Decor Dash</div>
        <ul class="menu">
            <li><a href="decor.php">home</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="about us.php">about us</a></li>
            <li><a href="contact.php">contact us</a></li>
        </ul>
        </div>
    </section>
    <div class="banner" style="padding-top: 20px;">
      <div class="wrapper">
         <div class="title">
            Sign Up
         </div>
         <form method="POST">
            <div class="field">
               <input type="text" name="name" required>
               <label>Full Name</label>
            </div>
             <div class="field">
                <input type="email" name="email" required>
                <label>Email Address</label>
             </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Sign Up">
            </div>
            <div class="signup-link">
               Already a member? <a href="login.php">Log In</a>
            </div>
         </form>
      </div>
    </div>
</body>
</html>