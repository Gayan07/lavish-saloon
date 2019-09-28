<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/appointment.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
        require "includes/header.php";
    ?>
    
    <div class="form" name="AppForm">
        <form  method="post" action="app.php">
            <h1>Appointment Form</h1>
            <h4>Please fill in this form to make an appointment.</h4><br>

           
            <label>Full Name:</label>
            <input type="name" required placeholder="Full Name" name="full_Name"><br>

            <label>Email:</label>
            <input type="email" required placeholder="Email" name="email"><br>

            <label>Date:</label>
            <input type="date" required placeholder="Date" name="date"><br>
           
            <label>Time:</label>
            <input type="time" required placeholder="Time" name="time"><br>

            <label>Styles:</label>
	        <input type="radio" name="hbfstyles" value="Men Hair Styles">Men Hair Styles &nbsp;&nbsp;&nbsp;
            <input type="radio" name="hbfstyles" value="Women Hair Styles">Women Hair Styles &nbsp;&nbsp;&nbsp;
	        <input type="radio" name="hbfstyles" value="Beard Styles">Beard Styles &nbsp;&nbsp;&nbsp;
            <input type="radio" name="hbfstyles" value="Facial">Facial<br>
       
            <label>Contact No:</label>
            <input type="text" required placeholder="Contact No:" name="contact_no"><br>

            <label>Payment Method:</label>
	        <input type="radio" name="payment_method" value="Debit">Debit Card &nbsp;&nbsp;&nbsp;
	        <input type="radio" name="payment_method" value="Credit">Credit Card

            
            <h5><input type="checkbox" name="checkbox" onclick="enableButton()" value="accept">Accept Privacy Policy and Terms</h5>

            <button id= "button"name="submit">Submit </button>
    
    </form>
        </div>
    

    <?php
        require "includes/footer.php";
    ?>


</body>
</html>
