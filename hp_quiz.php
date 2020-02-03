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
    
}
th
{
  color:white;
}
table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color: #fff;
}
table th {
    background-color: black;
    
}


#back{
  background-color: transparent;
  border:transparent;
}
#back:hover{
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
.quiz
{

}
</style>
</head>
  
<body >
  <nav class="navbar navbar-expand-sm  fixed top" id="navbar_2" style="width:100%">
  <form>
  <header style="color: white;" style="font: bold;">Admin</header>
  </form>
  <ul class="navbar-nav ml-auto">
     <form action="register.php" method="post">
     <button class="btn btn-success" type="submit" id="logout" name="logout">Logout</button>
     </form>
     </ul>
     </nav>
     <nav class="navbar navbar-expand-sm  fixed top" id="navbar_2" style="width:100%">
	  <ul class="navbar-nav ml-auto">
     <form action="admin_page.php" method="post">
     <button class="btn btn-success" type="submit" id="back" name="back">Back</button>
     </form>
     </ul>
     
     </nav>
      

    </nav>
    <?php
    $url='Basic_Harry_Potter_Quiz.json';
$data = file_get_contents($url);
$characters = json_decode($data);
?>
    <table>
  <tbody>
    <tr>
      <th>Question</th>
      <th>Answer</th>
    </tr>
    <?php foreach ($characters as $character) : ?>
        <tr>
            <td> <?php echo $character->question; ?> </td>
            <td> <?php echo $character->answer; ?> </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>