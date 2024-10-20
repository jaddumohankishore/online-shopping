<!DOCTYPE html>
<html lang="en">
<head> 
        <!-- Required meta tags --> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
      <style>
      input[type=button],
      input[type=submit] {
        background-color: #62529c;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
    </head> 
    <body>
    <div class="container">
          <div class="header" id="myHeader">
            <div class="nav-bar">
              <h1 class="title"><span>ClothS</span>tore</h1>
              <p>online shop</p>
            </div>
          </div>
          <center>
    <fieldset class="fset">
        <legend align="center">SignUp Form</legend>
        <form action="connect.php" method="post">
        <div class="">
                <label>Name:</label>
                <input type="text" name="name" placeholder="enter your Name" required>
            </div>
        <div class="">
                <label>Email:</label>
                <input type="email" name="email" placeholder="enter your Email" required>
            </div>
        <div class="gen">
                <label>Gender:</label>
                <input type="radio" name="gender" value="m" required>Male
                <input type="radio" name="gender" value="f">Female
                <input type="radio" name="gender" value="o">Others
            </div>
        <div class="">
                <label>Password:</label>
                <input type="password" name="password" placeholder="enter your password" required>
            </div>
            <div class="">
                <label>conform Password:</label>
                <input type="password" name="cpass" placeholder="enter your password" required>
            </div>
        <div class="">
                <label>Mobile</label>
                <select><option>india +91</option><option>us</option><option>uk</option>
                <option>japan</option><option>china</option><option>iran</option><option>australia</option></select>
                <input type="tel"  name="mobile" placeholder="enter your phnumber" required>
            </div>
            <input type="submit" value="submit">
    
</fieldset>
<a href="login.php">already have an account?<input type="button" value="login"></a>
</form>
</center>
</body>
</html>
