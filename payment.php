<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/payment.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <style>
        .error {color: #FF0000;}
    </style>

</head>

<body>
    <?php
        require "includes/header.php";
    ?>

<?php
// define variables and set to empty values
$ctErr = $fnameErr = $cnoErr = $pdateErr = $scodeErr = $baddErr = "";
$Card_Type = $full_name = $cardnumber = $paydate = $securitycode = $Billingaddress = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Card_Type"])) {
    $ctErr = "Name is required";
  } else {
    $Card_Type = test_input($_POST["Card_Type"]);
  }
  
  if (empty($_POST["full_name"])) {
    $fnameErr = "Email is required";
  } else {
    $full_name = test_input($_POST["full_name"]);
  }
    
  if (empty($_POST["cardnumber"])) {
    $cnoErr = "Date is required";
  } else {
    $cardnumber = test_input($_POST["cardnumber"]);
  }

  if (empty($_POST["paydate"])) {
    $pdateErr = "Time is required";
  } else {
    $paydate = test_input($_POST["paydate"]);
  }

  if (empty($_POST["securitycode"])) {
    $scodeErr = "Gender is required";
  } else {
    $securitycode = test_input($_POST["securitycode"]);
  }
  if (empty($_POST["Billingaddress"])) {
    $baddErr = "Gender is required";
  } else {
    $Billingaddress = test_input($_POST["Billingaddress"]);
  }
}

?>
    
    <div class="form" name="payForm">
    <form  method="post" action="pay.php">

        <h1>Payment Form</h1>
        <h5>*Your card details are secure. Your details will not shared with anyone*</h5><br>
        
        <form name="PayForm" onsubmit="return GEEKFORGEEKS1()" method="post" action="home.php">
            
        <label>Payment Rs:</label>
            <input type="text1" name="payment_price" readonly value="<?php if(isset($_POST['price'])){ echo $_POST['price'];} ?>"><br>
            
            <label>Card Type:</label>
                <input type="radio" required name="Card_Type" value="Visa">Visa
                <input type="radio" required name="Card_Type" value="Master Card">Master Card
                <input type="radio" required name="Card_Type" value="Discover">Discover
                <input type="radio" required name="Card_Type" value="AMEX">AMEX 
                 <span class="error">* <?php echo $ctErr;?></span><br>

            <label>Name:</label>
                <input type="text" name="full_name">
                 <span class="error">* <?php echo $fnameErr;?></span><br>

            <label>Card No:</label>
                <input type="text3" name="cardnumber" required placeholder="Card No">
                 <span class="error">* <?php echo $cnoErr;?></span><br>

            <label>Expiration Date(mm/yy):</label>
                <input type="date" required name="paydate">
                 <span class="error">* <?php echo $pdateErr;?></span><br>

            <label>Security code:</label>
                <input type="text4" name="securitycode" required placeholder="Security code">
                 <span class="error">* <?php echo $scodeErr;?></span><br>

            <label>Billing Address:</label>
                <input type="text5" name="Billingaddress" required placeholder="Billing Address">
                 <span class="error">* <?php echo $baddErr;?></span><br><br>


            <button  type="submit" class="btn2">Submit</button>

        </form>
    </div>

    <?php
        require "includes/footer.php";
    ?>


</body>

</html>
