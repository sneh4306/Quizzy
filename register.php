<!DOCTYPE html>
<html>
<head>
	<title>Quizzy</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta name="google-signin-client_id" content="95721736006-mr77qmojo2vqn0oaaemoi8173a3d3736.apps.googleusercontent.com">
  <meta charset="utf-8">
</head>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".login-form").hide();
    $(".login").css("background", "none");

    $(".login").click(function(){
      $(".signup-form").hide();
      $(".login-form").show();
      $(".signup").css("background", "none");
      $(".login").css("background", "#fff");
    });

    $(".signup").click(function(){
      $(".signup-form").show();
      $(".login-form").hide();
      $(".login").css("background", "none");
      $(".signup").css("background", "#fff");
    });

    $(".btn").click(function(){
      $(".input").val("");
    });
  });
</script>
<body class="formbg">
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'Quizzy'); // Selecting Database from Server
#echo "connection established";
?>
  
	  <div class="wrapper">
    <div class="container">
      
      <div class="signup">Sign Up</div>
      <div class="login">Log In</div>
      
       <div class="signup-form">
        <form method="POST" action="register.php">
          <input name="email" type="text" placeholder="Your Email Address" class="input"><br />
          <input name="username" type="text" placeholder="Choose a Username" class="input"><br />
          <input name="password" type="password" placeholder="Choose a Password" class="input"><br />
          <button name="create" type="submit" class="btn">Create account</button>
        </form>
       </div>
      
      <div class="login-form">
        <form method="POST" action="user_page1.php">
          <input type="text" name="user_login" placeholder="Username" class="input"><br />
          <input type="password" name="pass_login" placeholder="Password" class="input"><br />
          <button name="login" type="submit" class="btn" >log in</button>
          <div class="g-signin2" data-onsuccess="onSignIn"></div>
        </form>
       </div>
       <?php
       #echo "its working";

       if(isset($_POST["create"]))
      {
        #echo "hi";
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection,$sql);
        if($query_run)
        {
          echo '<script language="javascript">';
          echo 'alert("You have been registered. Please login")';  //not showing an alert box.
          echo '</script>';
          exit;
        }
      }
      
       if(isset($_POST['login']))
       {
        #echo "hello";
        $user_login=$_POST['user_login'];
        $pass = $_POST['pass_login'];
        $sql = "SELECT * from users where username='".$user_login."' and password='".$pass_login."'";
        $query_run = mysqli_query($connection,$sql);
        if(mysqli_num_rows($query_run)==1)
        {
          $_SESSION['status']="loggedin";
        header("location:user_page.php");

        echo '<script language="javascript">';
        echo 'alert("You have logged in")';  //not showing an alert box.
        echo '</script>';
        exit;
        }
       }

       ?>
      
    </div>
  </div>

</body>
</html>