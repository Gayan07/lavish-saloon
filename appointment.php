<?php include('app.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/appointment.css">
    <script public ="js/apointment.js"></script>
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
$nameErr = $emailErr = $dateErr = $timeErr = $stylesErr = $contactErr = $paymethErr = $checkboxErr = "";
$name = $email = $date = $time = $hbfstyles = $contact_no = $payment_method = $checkbox = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = test_input($_POST["date"]);
  }

  if (empty($_POST["time"])) {
    $timeErr = "Time is required";
  } else {
    $time = test_input($_POST["time"]);
  }

  if (empty($_POST["hbfstyles"])) {
    $stylesErr = "Gender is required";
  } else {
    $hbfstyles = test_input($_POST["hbfstyles"]);
  }
  if (empty($_POST["contact_no"])) {
    $contactErr = "Gender is required";
  } else {
    $contact_no = test_input($_POST["contact_no"]);
  }
  if (empty($_POST["payment_method"])) {
    $paymethErr = "Gender is required";
  } else {
    $payment_method = test_input($_POST["payment_method"]);
  }
  if (empty($_POST["checkbox"])) {
    $checkboxErr = "Gender is required";
  } else {
    $checkbox = test_input($_POST["checkbox"]);
  }
}

?>
    
    <div class="form" name="AppForm">
        <form onsubmit="return GEEKFORGEEKS()" method="post"  action="">
        

            <h1>Appointment Form</h1>
            <h4>*Please fill in this form to make an appointment*</h4><br>

           
            <label>Full Name:</label>
                <input type="name" required placeholder="Full Name" name="full_Name">
                 <span class="error">* <?php echo $nameErr;?></span><br>
            
            <label>Email:</label>
                <input type="email" required placeholder="Email" name="email">
                 <span class="error">* <?php echo $emailErr;?></span><br>

            <div <?php if(isset($date_error)): endif ?>>
                 <label>Date:</label>
                <input type="date" required placeholder="Date" name="date" value = "<?php echo $_date; ?>">
                <?php if (isset($date_error)): ?>
                 <span class="error">* <?php echo $date_error;?></span><br>
                <?php endif ?>
            </div>
            <label>Time:</label>
                <input type="time" required placeholder="Time" name="time">
                 <span class="error">* <?php echo $timeErr;?></span><br>

            <label>Styles:</label>
	            <input type="radio" name="hbfstyles" value="Men Hair Styles">Men Hair Styles 
                <input type="radio" name="hbfstyles" value="Women Hair Styles">Women Hair Styles 
	            <input type="radio" name="hbfstyles" value="Beard Styles">Beard Styles 
                <input type="radio" name="hbfstyles" value="Facial">Facial
                 <span class="error">* <?php echo $stylesErr;?></span><br>
       
            <label>Contact No:</label>
                <input type="text" required placeholder="012345679" name="contact_no" pattern="[0-9]{10}">
                 <span class="error">* <?php echo $contactErr;?></span><br>

            <label>Payment Method:</label>
	            <input type="radio" required name="payment_method" value="Debit">Debit Card 
                <input type="radio" required name="payment_method" value="Credit">Credit Card
                 <span class="error">* <?php echo $paymethErr;?></span>

            
            <h5><input type="checkbox" required name="checkbox" onclick="enableButton()" value="accept">Accept Privacy Policy and Terms<span class="error">* <?php echo $checkboxErr;?></span></h5><br>

            <button id= "button"name="submit" type = "submit">Submit </button>
    
    </form>
        </div>
    

    <?php
        require "includes/footer.php";
    ?>


</body>
<script>

</script>
</html>
