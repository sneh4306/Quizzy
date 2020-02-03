<!DOCTYPE html>
<html>
<head>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta name="google-signin-client_id" content="81478909469-1vtece26u8ji912ndtngigaj7aqfbigp.apps.googleusercontent.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
  body{
    background-color: black;
    background-size: cover; 
}
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
    color: white;
}
table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color: #fff;
}
table th {
    background-color: black;
    color: white;
}

#hp{
  background-color: transparent;
  border:transparent;
}
#hp:hover{
  background-color: grey;
}

#cb{
  background-color: transparent;
  border:transparent;
}
#cb:hover{
  background-color: grey;
}
#logout{
  background-color: transparent;
  border:transparent;
  float: :right;
  align-self:right;
}
#logout:hover{
  background-color: grey;
}
</style>
</head>
  
<body >
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'Quizzy'); // Selecting Database from Server
#echo "connection established";
?>
  
	  <nav class="navbar navbar-expand-sm  fixed top" id="navbar_2" style="width:100%">
    <form action="hp_quiz.php" method="post">
     <button class="btn btn-success" type="submit" id="hp" name="hp_quiz">Harry Potter</button>
     </form>
     <form action="cb_page.php" method="post">
     <button class="btn btn-success" type="submit" id="cb" name="cb_quiz">Car Logo</button>
     </form>
     <ul class="navbar-nav ml-auto">
     <form action="register.php" method="post">
     <button class="btn btn-success" type="submit" id="logout" name="logout">Logout</button>
     </form>
     </ul>
      

    </nav>
    <?php
$sql1 = "SELECT * FROM users "; 
  $result1 =mysqli_query($connection,$sql1);
  $resultCheck1 =mysqli_num_rows($result1);
  $row1=mysqli_fetch_assoc($result1)
  ?>
    <table>
  <tbody>
    <tr>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
    <?php foreach($row1 as $rows): ?>
        <tr>
            <td> <?php echo $rows['username']; ?> </td>
            <td> <?php echo $rows['email']; ?> </td>
            <td> <?php echo $rows['password']; ?> </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  
  

</body>
</html>