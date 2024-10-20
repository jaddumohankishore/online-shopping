<?php
$u=$_POST['uname'];
$p=md5($_POST['pwd']);
$con=mysqli_connect('localhost','root','','mohan');
$sql="select * from form where name='$u' AND password='$p'";
$k=mysqli_query($con,$sql);
if(mysqli_num_rows($k)>0)
   echo '<script>alert("login successful");
location.replace("index.html");</script>';
else
    echo '<script>location.replace("login.php");
alert("Login failed:Incorrect username or password");</script>';
mysqli_close($con);
?>