<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAVISH</title>

  <link rel="stylesheet" type="text/css" href="../public/css/template.css">
  <link rel="stylesheet" type="text/css" href="../public/css/adminlogin.css">
  <link rel="stylesheet" type="text/css" href="../public/css/index.css">
  <link rel="icon" type="image/png" href="../public/images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



  
  
    <center>
      <h2>Admin Login </h2>
      <br>

      <form class="form" action="controllers/adminlogin.php" method="POST">

        <div>
          <label for="uname"><b>Email</b></label>
          <input type="text" placeholder="Enter Username" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div>
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </center>
    
</body>

</html>


