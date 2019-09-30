<?php
session_start();
require '../iwt/Admin/controllers/db.php';
// Check connection



$pay_pr = $_POST["payment_price"];
$c_type = $_POST["Card_Type"];
$f_name = $_POST["full_name"];
$c_no = $_POST["cardnumber"];
$e_date = $_POST["paydate"];
$s_code = $_POST["securitycode"];
$b_add = $_POST["Billingaddress"];
$u_id = $_SESSION["logged_user_id"];


//attempt insert query execution
$sql = "INSERT INTO pay (user_id,card_type,fname,card_no,expire_date,sec_code,bill_address) VALUE ('$u_id','$pay_pr','$c_type','$f_name','$c_no','$e_date','$s_code','$b_add')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:home.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
