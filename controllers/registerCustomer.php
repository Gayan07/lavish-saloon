<?php
require '../controllers/db.php';

//if(isset($_POST['register'])){

    // Getting values from POST request
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['psw'];
    $gender = $_POST['gender'];
    

    // Inserting into database
    $sql = "INSERT INTO users (first_name, last_name, email, contact, _password, gender) VALUES  ('$firstName', '$lastName', '$email', $number, '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        header("Location:/iwt/login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    ?>

