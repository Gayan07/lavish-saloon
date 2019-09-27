<?php

    // Retrieve query
    $sql = "SELECT id, first_name, last_name, contact, gender, email FROM users WHERE role='staff'";

    // Executing retrieve query
    $result = $conn->query($sql);

    // Checking result count
    if ($result->num_rows > 0) {

        // Displaying result in a while loop
        while($row = $result->fetch_assoc()) {
        ?>

        <!-- Employee Record -->
        <tr>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["contact"] ?></td>     
            <td><?php echo $row["gender"] ?></td>
            <td><button class="viewbutton"><i class="fa fa-spinner" style="font-size:16px"></i>  View</button></td>
            <td><button class="deletebutton"><i class="fa fa-trash-o" style="font-size:16px"></i>  Delete</button></td>
        </tr>
        <!-- End Employee Record -->

        <?php
        }
      
    // If result is less than 0
    } else {
        echo "<tr><td colspan='7'>No Employees</td></tr>";
    }
    $conn->close();

?>