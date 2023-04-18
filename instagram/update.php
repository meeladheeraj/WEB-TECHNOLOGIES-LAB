<?php

$mail=$_POST["uemail"];
$pas=$_POST["password"];
$mysqli= new mysqli("localhost","id20609103_root","Dumbu16@admin","id20609103_uploads");
$b=$mysqli->query("SELECT * FROM user_details WHERE email='$mail' ");
if(isset($b))
{
   $c =$mysqli->query("UPDATE `user_details` SET `passw`='$pas' WHERE email ='$mail'");
   if(isset($c))
   {
        echo '<script> alert("changed successful!");</script>';
        echo '<script> window.location.replace("index.php");</script>';
   }
   else{
    echo '<script> alert("invalid");</script>';
}
}

?>
