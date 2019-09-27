<?php

require 'db.php';

if(isset($_POST['email'])){

    // Getting values from POST request
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['psw'];

    // Inserting into database
    $sql = "INSERT INTO users(first_name, last_name, email, contact_number, password, gender) VALUES  ('$firstName', '$lastName', '$email', $number, '$password', 'male')";

    // Checking execution results
    if ($conn->query($sql) === TRUE) {
        header('Location: ../login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}else{
    echo "Access Denied !!";
}
