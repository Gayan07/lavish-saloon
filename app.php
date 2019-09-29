<?php

require '../iwt/controllers/db.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$_date = "";

if (isset($_POST['submit'])) {
    $f_name = $_POST["full_Name"];
    $_email = $_POST["email"];
    $_date = $_POST["date"];
    $_time = $_POST["time"];
    $_style = $_POST["hbfstyles"];
    $_con_num = $_POST["contact_no"];
    $_pay_meth = $_POST["payment_method"]; 

 //check the date already exist
 $sql_d = "SELECT * FROM appointment WHERE app_date = '$_date'";
 $res_d = mysqli_query($conn, $sql_d);

 
    //check the date already exist
    $sql_d = "SELECT * FROM appointment WHERE app_date = '$_date'";
    $res_d = mysqli_query($conn, $sql_d);

    if (mysqli_num_rows($res_d)> 0){
        $date_error = "Date already booked";
    }
    else {
        // header("Location:app.php");
     //attempt insert query execution
    $sql = "INSERT INTO appointment (app_id,user_id,full_name,email,app_date,app_time,styles,contact_no,pay_method) VALUE ('','2','$f_name','$_email','$_date','$_time','$_style','$_con_num','$_pay_meth')";



    if (mysqli_query($conn, $sql)) {
    
    switch($_style){
        case "Beard Styles" : header("location:beard.php"); break;
        case "Men Hair Styles" : header("location:menhair.php"); break;
        case "Women Hair Styles" : header("location:womenhair.php"); break;
        case "Facial" : header("location:facial.php"); break; 
    }   

    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }   
}
mysqli_close($conn);
