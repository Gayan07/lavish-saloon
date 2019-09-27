<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="../public/css/staffprofile.css">
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
            <h1>Administrator Profile</h1>
        </div>

        <div class="details">

            <?php require 'controllers/administrator/getAdministrator.php' ?>

        </div>

    </div>
</body>



</html>