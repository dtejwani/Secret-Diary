<?php 
$diarycontent="";
     $link=mysqli_connect("sdb-f.hosting.stackcp.net","user01-3138347707","Hazel@123","user01-3138347707");
   if (mysqli_connect_error()){
    die("you fucked up");
   }
$query="SELECT diary FROM users where email='".mysqli_real_escape_string($link,$_COOKIE["email"])."'";
$row=mysqli_fetch_array(mysqli_query($link,$query));
$diarycontent=$row['diary'];
    
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style type="text/css">
        
            #textdiary{
                width: 100%;
                height: 87%;
                margin-top: 3%;
                
            }
        
        </style>
    
    
    </head>
   <body>
       <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        SECRET DIARY
      </a>
         <button id="myButton" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </nav>
       <div class="container" class="dry">
           <textarea id="textdiary"><?php echo $diarycontent; ?></textarea>
       </div> 
       


       <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        
        location.href = "login.php";
       
    };
       </script>
       
        </body>
</html>

<?php
    include("footer.php");


?>