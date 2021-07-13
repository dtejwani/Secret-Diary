<?php
 $link=mysqli_connect("sdb-f.hosting.stackcp.net","user01-3138347707","Hazel@123","user01-3138347707");
   if (mysqli_connect_error()){
    die("you fucked up");
   }
    $query="UPDATE `users` SET `diary` = '".mysqli_real_escape_string($link,$_POST['content'])."' WHERE email='".mysqli_real_escape_string($link,$_COOKIE["email"])."'";
    mysqli_query($link,$query);

?>