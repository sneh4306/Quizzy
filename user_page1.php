<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="google-signin-client_id" content="81478909469-1vtece26u8ji912ndtngigaj7aqfbigp.apps.googleusercontent.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<meta charset="UTF-8">

<style type="text/css">
    body{
        font-family: Arail, sans-serif;
        background-color: black;
    background-size: cover; 
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
        font-color:black;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
        font-color:black;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
        font-color:black;
    }
    .search-box input[type="text"]{
        width: 100%;
        box-sizing: border-box;
        
        font-color:black;
    }
    .result
    {
        width: 100%;
        box-sizing: border-box;
        color: white;
        font-color:black;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        font: color:white;
    }
    .result p:hover{
        background: transparent;
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
<br>
<br>
<header  style="color: white;font: bold;padding-left: 20px;">Welcome User</header>
  <nav class="navbar navbar-expand-sm  fixed top" id="navbar_2" style="width:100%">
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Friends..." />
        <div class="result"></div>
    </div>
    <ul class="navbar-nav ml-auto">
     <form action="register.php" method="post">
     <button class="btn btn-success" type="submit" id="logout" name="logout">Logout</button>
     </form>
     </ul>
  </nav>


    
</body>
</html>