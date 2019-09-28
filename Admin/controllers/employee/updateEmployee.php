<?php

require '../db.php';

if (isset($_POST['updateBtn'])) {

    // Getting values from POST request
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['psw'];
    $gender= $_POST['gender'];
    $role = $_POST['role'];

    if ($password != '') {
        // Updating record from database if password is updated
        $sql = " UPDATE users SET first_name = '$firstName', last_name = '$lastName', email = '$email', contact ='$number', gender = '$gender', role = '$role', password = '$password' WHERE users.id = $id";
    } else {
        // Updating record from database if password is not updated
        $sql = " UPDATE users SET first_name = '$firstName', last_name = '$lastName', email = '$email', contact ='$number', gender = '$gender', role = '$role' WHERE users.id = $id";
    }

    // Checking execution results
    if ($conn->query($sql) === TRUE) {
        header('Location: /'.$projectName.'/admin/staff-profile.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 


if (isset($_POST['deactivateBtn'])) {

    // Getting values from POST request
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = '$id'";

    // Checking execution results
    if ($conn->query($sql) === TRUE) {
        header('Location: /'.$projectName.'/admin/staff-profile.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 

?>
