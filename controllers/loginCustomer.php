<?php
session_start();
require 'db.php';

if (isset($_POST['email']) && isset($_POST['psw'])) {

    // Getting values from POST request
    $email = $_POST['email'];
    $password = $_POST['psw'];

    // Reading data from database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["logged_user_fname"] = $row['first_name'];
            $_SESSION["logged_user_lname"] = $row['last_name'];
            $_SESSION["logged_user_email"] = $row['email'];
            $_SESSION["logged_user_number"] = $row['contact_number'];
            $_SESSION["logged_user_gender"] = $row['gender'];
        }
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php');
    }
} else {
    header('Location: ../login.php');
}
?>