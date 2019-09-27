<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <script src="public/js/adminbarchart.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/css/template.css">
    <link rel="stylesheet" type="text/css" href="../public/css/admindashboard.css">
    <link rel="stylesheet" type="text/css" href="../public/css/admin.css">
    <link rel="icon" type="image/png" href="../public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body >

    <?php require 'includes/header.php'; ?>

    <?php
    require "includes/navigation.php";
    ?>


    <div>
        <div class="box">
            <br>
            <a>Number of Customers<br></a>
            <div class="boxdata"></div>



        </div>
        <div class="box1">
            <br>
            <a>Number of Appointment<br></a>
            <div class="boxdata"></div>

        </div>
        <div class="box2">
            <br>
            <a>Number of Payments<br></a>
            <div class="boxdata"></div>

        </div>
        <div class="box3">
            <br>
            <a>Number of Staff<br></a>
            <div class="boxdata"></div>

        </div>
        <br>
    </div>
    <br>
    <div>
        <div class="count">
            <a>Revenue</a>

        </div>
        <div class="rbox">
            <a>Total Income <br></a>
            <div class="rboxdata"></div>

        </div>
        <div class="rbox1">
            <a>Total Expenses <br></a>
            <div class="rboxdata"></div>

        </div>
        <div class="rbox2">
            <a>Profit<br></a>
            <div class="rboxdata"></div>

        </div>
    </div>
 



    


</body>

</html>