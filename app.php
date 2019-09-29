<?php
session_start();
require '../iwt/Admin/controllers/db.php';

// Check connection


$user_id = $_SESSION["logged_user_id"];
$firstName = $_SESSION["logged_user_fname"]; 
$email =$_SESSION["logged_user_email"] ;
$date = $_POST["date"];
$time = $_POST["time"];
$style = $_POST["hbfstyles"];
$con_num = $_SESSION["logged_user_number"];
$pay_meth = $_POST["payment_method"];    



//attempt insert query execution
$sql = "INSERT INTO app (id,first_name,email,app_date,app_time,styles,contact_no,pay_method) VALUE ('$user_id','$firstName','$email','$date','$time','$style','$con_num','$pay_meth')";

if (mysqli_query($conn, $sql)) {
    
switch($_style){
    case "Beard Styles" : header("location:beard.php"); break;
    case "Women Hair Styles" : header("location:womenhair.php"); break;
    case "Beard Styles" : header("location:beard.php"); break; 
}

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>