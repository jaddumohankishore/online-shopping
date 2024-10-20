<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=md5($_POST['password']);
    $con=new mysqli('localhost','root','','mohan');
    if($con){
        //echo "connection successful";
        $sql="insert into form(name,email,gender,mobile,password)values('$name','$email','$gender','$mobile','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<script>location.replace("../forms/login.php");
            alert("signup successful please login to continue");
            </script>';
        }
        else{
            die(mysqli_error($con));
        }
    }
    else{
        die(mysqli_error($con));
    }
}
?>