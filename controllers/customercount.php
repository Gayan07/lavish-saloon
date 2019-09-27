<?php
require 'db.php';



// Reading data from database
$sql = "SELECT * FROM users ";
$result = $conn->query($sql);



if ($rcount = mysqli_query($conn, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($rcount);
    echo $rowcount; 
   
}




// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "ID : " . $row["id"] . "<br>";
//         echo "First Name: " . $row["first_name"] . "<br>";
//         echo "Last Name: " . $row["last_name"] . "<br>";
//         echo "Email : " . $row["email"] . "<br>";
//         echo "Number : " . $row["contact_number"] . "<br>";
//         echo "Password : " . $row["password"] . "<br>";
//         echo "Gender : " . $row["gender"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();
?>