<!doctype html> 
	
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
        <form method="post" action="login-exec.php">
        <center>
          <fieldset class="fset">
            <legend align="center">Login Form</legend>
                Username:<input type="text" name="uname" required><br>
                Password:<input type="password" name="pwd" required><br>
                <input type="submit" name="login" value="login" ><br>
               <br> <a href="#">forgot password?</a>
           </fieldset>
           <a href="signup.php"> don't have an account?<br><input type="button" value="signup"></a>
        </center>
        </form>
    
    </body>
</html> 