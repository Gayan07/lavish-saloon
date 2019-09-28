<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/payment.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
        require "includes/header.php";
    ?>
    
    <div class="form" name="payForm">
    <form  method="post" action="pay.php">

        <h1>Payment Form</h1>
        <h5>*Your card details are secure. Your details will not shared with anyone*</h5><br>
        
        <form name="PayForm" onsubmit="return GEEKFORGEEKS1()" method="post" action="home.php">

            <label>Service Style</label>
            <input type="text" name="service_style" readonly value="<?php if(isset($_POST['style'])){ echo $_POST['style'];} ?>"><br>
            
            <label>Payment Rs:</label>
            <input type="text" name="payment_price" readonly value="<?php if(isset($_POST['price'])){ echo $_POST['price'];} ?>"><br>
            
            <label>Card Type:</label>
            <input type="radio" name="Card_Type" value="Visa">Visa
            <input type="radio" name="Card_Type" value="Master Card">Master Card
            <input type="radio" name="Card_Type" value="Discover">Discover
            <input type="radio" name="Card_Type" value="AMEX">AMEX <br>

            <label>Name:</label>
            <input id="text" type="text" name="full_name"><br>

            <label>Card No:</label>
            <input id="text3" type="text3" name="cardnumber" required placeholder="Card No"><br>

            <label>Expiration Date(mm/yy):</label>
            <input id="date" type="date" name="paydate"><br>

            <label>Security code:</label>
            <input id="text4" type="text4" name="securitycode" required placeholder="Security code"><br>

            <label>Billing Address:</label>
            <input id="text5" type="text5" name="Billingaddress" required placeholder="Billing Address"><br><br>


            <button id="btn2" type="submit" class="btn2">Submit</button>

        </form>
    </div>

    <?php
        require "includes/footer.php";
    ?>


</body>

</html>
