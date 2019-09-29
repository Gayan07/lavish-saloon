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

            <!-- Administrator Record -->

            <form action="controllers/administrator/updateAdministrator.php" method="POST">
                <input type="text" name="id" value="<?php echo $row["id"] ?>" hidden>
<table>
    <tr>
        <th></th>
        <th></th>
    </tr>
                <tr><td>First name:</td> <td> <input type="text" name="firstName" value="<?php echo $row["first_name"] ?>"></td></tr><br>
                <tr><td>Last name: </td> <td> <input type="text" name="lastName" value="<?php echo $row["last_name"] ?>"></td></tr><br>
                <tr><td>Email address:</td> <td>  <input type="email" name="email" value="<?php echo $row["email"] ?>"></td></tr><br>
                <tr><td>Contact Number: </td> <td> <input type="tel" name="number" value="<?php echo $row["contact"] ?>"></td></tr><br>
                
                <?php
                    if($row["gender"] == "male"){
                ?>
                    <tr><td>Gender : </td> <td><input type="radio" name="gender" value="male" checked><label>Male</label><input type="radio" name="gender" value="female"><label>Female</label></td></tr><br>
                <?php
                    }else{
                ?>
                   <tr><td> Gender : </td> <td><input type="radio" name="gender" value="male"><label>Male</label><input type="radio" name="gender" value="female" checked><label>Female</label></td></tr><br>
                <?php
                    }
                ?>


                <?php
                    if($row["role"] == "admin"){
                ?>
                   <tr><td> Role : </td> <td><select name="role"><option value="admin" selected>Administrator</option><option value="staff">Employee</option><option value="customer">Customer</option></select></td></tr><br>
                <?php
                    }else if($row["role"] == "staff"){
                ?>
                   <tr><td>Role : </td> <td><select name="role"><option value="admin">Administrator</option><option value="staff" selected>Employee</option><option value="customer">Customer</option></select></td></tr><br>
                <?php
                    }else{
                ?>
                   <tr><td> Role : </td> <td><select name="role"><option value="admin">Administrator</option><option value="staff">Employee</option><option value="customer" selected>Customer</option></select></td></tr><br>
                <?php
                    }
                ?>



<tr><td>Password: </td> <td><input type="password" name="psw"></td></tr><br>
    </table>
                <div>
                    <button type="submit" class="button" name="updateBtn">Update</button>
                    <button type="submit" class="button button1" name="deactivateBtn">Deactivate</button>
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
    header('location: administrators.php');
}

?>