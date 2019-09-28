<?php

require '../db.php';

if (isset($_POST['deactivateBtn'])) {

    // Getting values from POST request
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = '$id'";

    // Checking execution results
    if ($conn->query($sql) === TRUE) {
        header('Location: /'.$projectName.'/admin/customers.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 

?>
