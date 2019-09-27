<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="../public/css/adminprofile.css">
    <link rel="stylesheet" type="text/css" href="../public/css/admindashboard.css">
    <link rel="stylesheet" type="text/css" href="../public/css/template.css">
    <link rel="icon" type="image/png" href="../public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    require "includes/header.php";
    ?>

<?php
    require "includes/navigation.php";
    ?>
    <div class="profile">
        <div>
            <h1>Admin Profile</h1>
        </div>





        <div class="details">
            <form action="/action_page.php">
                First name: <input type="text" name="FirstName" value="admin"><br>
                Last name: <input type="text" name="LastName" value="admin2"><br>
                Email address: <input type="text" name="emailaddress" value="gayan123@gmail.com"><br>
                Contact Number: <input type="text" name="contactnumber" value="0715869456"><br>


            </form>



        </div>


        <div>
            <button type="button" class="editbtn">update</button>
            <button type="submit" class="deletebtn">delete</button>
        </div>

    </div>
</body>



</html>