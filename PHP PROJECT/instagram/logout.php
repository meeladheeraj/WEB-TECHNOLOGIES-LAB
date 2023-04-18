<?php
session_start();
if(isset($_SESSION['us_email']))
{
    unset($_SESSION['us_email']);
    $u=$_SESSION["name"];
    $con=new mysqli("localhost","id20609103_root","Dumbu16@admin","id20609103_uploads");
    $query="DELETE FROM `activeusers` WHERE username='$u'";
    $r=$con->query($query);
    if(isset($r)){
    unset($_SESSION["name"]);
    session_destroy();
    header("Location: index.php");
    }   
}
else
{
    header("Location: index.php");   
}
?>