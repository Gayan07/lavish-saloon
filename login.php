<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/Login.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="container" class="background">
    <?php require 'includes/header.php'; ?>

    <div class="example1">
    </div>

    <form class="form" action="controllers/loginCustomer.php" method="POST">

        <div>
            <h1>Login</h1>


            <input type="text" required placeholder="User Name" name="email"><br>


            <input type="password" required placeholder="Password" name="psw"><br>


            <button type="submit" class="registerbtn">Log In</button>
        </div>



        <div>
            <h5>if you havent an account? <a href="registration.php">Register</a>.</h5>
        </div>
        <br>
        <br>


        <div class="col">
            <a href="#" class="fb btn">
                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
            </a>
            <a href="#" class="twitter btn">
                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
            </a>
            <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                </i> Login with Google+
            </a>
        </div>
    </form>


    <?php require 'includes/footer.php' ?>

    <div class="imgtext">
        <h6>We will make you stylish.</h6>

    </div>

</body>

</html>