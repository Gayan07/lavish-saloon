<?php
require '../iwt/Admin/controllers/db.php';

// Check connection



$f_name = $_POST["full_Name"];
$_email = $_POST["email"];
$_date = $_POST["date"];
$_time = $_POST["time"];
$_style = $_POST["hbfstyles"];
$_con_num = $_POST["contact_no"];
$_pay_meth = $_POST["payment_method"];    
$user_id = $_SESSION["logged_user_id"];


//attempt insert query execution
$sql = "INSERT INTO app (user_id,full_name,email,app_date,app_time,styles,contact_no,pay_method) VALUE ('$user_id','$f_name','$_email','$_date','$_time','$_style','$_con_num','$_pay_meth')";

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