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

            <form action="controllers/administrator/updateEmployee.php" method="POST">
                <input type="text" name="id" value="<?php echo $row["id"] ?>" hidden>

                First name: <input type="text" name="firstName" value="<?php echo $row["first_name"] ?>"><br>
                Last name: <input type="text" name="lastName" value="<?php echo $row["last_name"] ?>"><br>
                Email address: <input type="email" name="email" value="<?php echo $row["email"] ?>"><br>
                Contact Number: <input type="tel" name="number" value="<?php echo $row["contact"] ?>"><br>
                
                <?php
                    if($row["gender"] == "male"){
                ?>
                    Gender : <input type="radio" name="gender" value="male" checked><label>Male</label><input type="radio" name="gender" value="female"><label>Female</label><br>
                <?php
                    }else{
                ?>
                    Gender : <input type="radio" name="gender" value="male"><label>Male</label><input type="radio" name="gender" value="female" checked><label>Female</label><br>
                <?php
                    }
                ?>


                <?php
                    if($row["role"] == "admin"){
                ?>
                    Role : <select name="role"><option value="admin" selected>Administrator</option><option value="staff">Employee</option><option value="customer">Customer</option></select><br>
                <?php
                    }else if($row["role"] == "staff"){
                ?>
                   Role : <select name="role"><option value="admin">Administrator</option><option value="staff" selected>Employee</option><option value="customer">Customer</option></select><br>
                <?php
                    }else{
                ?>
                    Role : <select name="role"><option value="admin">Administrator</option><option value="staff">Employee</option><option value="customer" selected>Customer</option></select><br>
                <?php
                    }
                ?>



                Password: <input type="password" name="psw"><br>
                <div>
                    <button type="submit" class="editbtn" name="updateBtn">Update</button>
                    <button type="submit" class="deletebtn" name="deactivateBtn">Deactivate</button>
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