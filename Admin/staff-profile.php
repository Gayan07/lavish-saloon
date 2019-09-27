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
    require "includes/navigation.php";
    ?>
    <?php
    require "includes/navigation.php";
    ?>
    

    <div class="profile">
        <div>
            <h1>Staff Profile</h1>
        </div>





        <div class="details">
            <form action="/action_page.php">
                First name: <input type="text" name="FirstName" value="Mickey"><br>
                Last name: <input type="text" name="LastName" value="Mouse"><br>
                Email address: <input type="text" name="emailaddress" value="gayan123@gmail.com"><br>
                Contact Number: <input type="text" name="contactnumber" value="0715869456"><br>


            </form>



        </div>


        <div>
            <button type="button" class="editbtn">Add</button>
            <button type="button" class="editbtn">update</button>
            <button type="submit" class="deletebtn">delete</button>
        </div>

        <table class="tables">
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Staff</th>
                <th>Service</th>
                <th>Payment</th>

            </tr>
            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
                <td>80</td>
                <td>80</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
                <td>80</td>
                <td>80</td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>80</td>
                <td>80</td>
                <td>80</td>
            </tr>


        </table>
    </div>
</body>



</html>