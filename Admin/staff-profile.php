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


    <div class="all">
        <div class="profile">

            <h1>Staff Profile</h1>
        </div>

        <div>

            <?php require '../Admin/controllers/employee/getEmployee.php' ?>

        </div>
    </div>



    </div>
</body>



</html>