<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <script src="public/js/adminbarchart.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/css/template.css">
    <link rel="stylesheet" type="text/css" href="../public/css/admindashboard.css">
    <link rel="stylesheet" type="text/css" href="../public/css/stafflist.css">
    <link rel="icon" type="image/png" href="../public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php require 'includes/header.php'; ?>

    <?php
    require "includes/navigation.php";
    ?>
    <div class="topnav">

        <div class="search">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <table style="width:85%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th></th>
                <th></th>
            </tr>
            <thead>

            <tbody>
                <?php require 'controllers/administrator/getAdministrators.php' ?>
            </tbody>
    </table>





</body>

</html>