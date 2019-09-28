<?php


require '../Admin/controllers/db.php';

// if(isset($_POST['email'])){

    // Getting values from POST request
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['psw'];
    $gender = $_POST['gender'];

    // Inserting into database
    $sql = "INSERT INTO users(first_name, last_name, email, contact, password, gender) VALUES  ('$firstName', '$lastName', '$email', $number, '$password', '$gender')";

    // Checking execution results
    if ($conn->query($sql) === TRUE) {
        header('Location: ../login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// }else{
//     echo "Access Denied !!";
// }
