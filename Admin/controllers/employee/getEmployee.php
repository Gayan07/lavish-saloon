<?php

if (isset($_GET['aid'])) {

    $aid = $_GET['aid'];

    // Retrieve query
    $sql = "SELECT id, first_name, last_name, contact, gender, email, role FROM users WHERE id='$aid'";

    // Executing retrieve query
    $result = $conn->query($sql);

    // Checking result count
    if ($result->num_rows > 0) {

        // Displaying result in a while loop
        while ($row = $result->fetch_assoc()) {
            ?>

            <!-- Employee Record -->

            <form action="controllers/administrator/updateEmployee.php" method="POST">
                <input type="text" name="id" value="<?php echo $row["id"] ?>" hidden>
               <table> <tr> 
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td> First name:</td>
                    <td><input type="text" name="firstName" value="<?php echo $row["first_name"] ?>"></td><br>
                </tr>
                <tr>
                    <td>Last name:</td>
                    <td><input type="text" name="lastName" value="<?php echo $row["last_name"] ?>"></td><br>
                </tr>
                <tr>
                    <td>Email address:</td>
                     <td><input type="email" name="email" value="<?php echo $row["email"] ?>"></td><br>   
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input type="tel" name="number" value="<?php echo $row["contact"] ?>"></td><br>
                </tr>
                
        
                <?php
                    if($row["gender"] == "male"){
                ?>
                    <tr><td>Gender :</td><td> <input type="radio" name="gender" value="male" checked><label>Male</label> <input type="radio" name="gender" value="female"><label>Female</label></tr></td><br>
                <?php
                    }else{
                ?>
                    Gender : <input type="radio" name="gender" value="male"><label>Male</label>    <input type="radio" name="gender" value="female" checked><label>Female</label><br>
                <?php
                    }
                ?>


                <?php
                    if($row["role"] == "admin"){
                ?>
                    <tr><td>Role : </td><td><select name="role"><option value="admin" selected>Administrator</option><option value="staff">Employee</option><option value="customer">Customer</option></select></tr></td><br>
                <?php
                    }else if($row["role"] == "staff"){
                ?>
                   <tr><td>Role : </td><td> <select name="role"><option value="admin">Administrator</option><option value="staff" selected>Employee</option><option value="customer">Customer</option></select></tr></td><br>
                <?php
                    }else{
                ?>
                    <tr><td>Role : </td><td> <select name="role"><option value="admin">Administrator</option><option value="staff">Employee</option><option value="customer" selected>Customer</option></select></tr></td><br>
                <?php
                    }
                ?>



            <tr><td>Password: </td><td><input type="password" name="psw"></tr></td><br>
                
                </table>
                <div>
                    <button type="submit" class="button" name="updateBtn">Update</button>
                    <button type="submit" class="button button3" name="deactivateBtn">Deactivate</button>
                </div>

            </form>
            <!-- End Administrator Record -->

<?php
        }

        // If result is less than 0
    } else {
        echo "No Administrator found by the this id";
    }
    $conn->close();
} else {
    header('location: staff.php');
}

?>