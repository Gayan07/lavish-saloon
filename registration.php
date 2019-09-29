<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/registration.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    require "includes/header.php";

    ?>

    <div class="example1">
    </div>

    <form class="form" method="POST" action="controllers/registerCustomer.php">
        <div>
            <h1>Register</h1>
            <h5>Please fill in this form to create an account.</h5>

            <input type="text" required placeholder="First Name" name="firstName"><br>

            <input type="text" required placeholder="Last Name" name="lastName"><br>

            <input type="text" required placeholder="Email" name="email"><br>

            <input type="number" required placeholder="Contact Number" name="number"><br>

            <input type="radio" name="gender" value="male"><label>Male</label><input type="radio" name="gender" value="female"><label>Female</label><br><br>

            <input type="password" required placeholder="Password" name="psw"><br>

            <input type="password" required placeholder="Re-Password" name="psw-repeat"><br>

            <h5>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</h5>

            <button id="button" type="register" name="register">Register</button>
        </div>

        <div class="container signin">
            <h5>Already have an account? <a href="#">Sign in</a>.</h5>
        </div>
    </form>


    <?php
    require "includes/footer.php";
    ?>

    <div class="imgtext">
        <h2>Be Bold.<br> Be beautiful.</h2>
        <h3>"Discover your own style. Don't try to repeat what has alreday been written-have the courage to do your own thing and don't be afraid to do something different"</h3>

    </div>

</body>

</html>