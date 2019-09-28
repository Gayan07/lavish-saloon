<?php

// if (isset($_GET['aid'])) {

//     $aid = $_GET['aid'];

    // Retrieve query
    $sql = "SELECT style, price FROM services ";

    // Executing retrieve query
    $result = $conn->query($sql);

    // Checking result count
    if ($result->num_rows > 0) {

        // Displaying result in a while loop
        while ($row = $result->fetch_assoc()) {
            ?>

            <!-- Administrator Record -->
            <form action="addcartdb.php" method='POST'>
        <div class="items">

            <div class="item-card">
                <img class="image1" src="images/TB.jpg" alt="beard12" style="width:100%">
                <input type="text" name="style" value="<?php echo $row["style"] ?>"><br>
                <input type="text" name="price" value="<?php echo $row["price"] ?>"><br>
                <p><button type="submit" class="editbtn" name="updateBtn">Add to cart</button></p>
            </div>

            <div class="item-card">
                <img class="image1" src="images/B1.jpg" alt="beard12" style="width:100%">
                <input type="text" name="style" value="<?php echo $row["style"] ?>"><br>
                <input type="text" name="price" value="<?php echo $row["price"] ?>"><br>
                <p><button type="submit" class="editbtn" name="updateBtn">Add to cart</button></p>
            </div>

            <div class="item-card">
                <img class="image1" src="images/LBs.jpg" alt="beard12" style="width:100%">
                <input type="text" name="style" value="<?php echo $row["style"] ?>"><br>
                <input type="text" name="price" value="<?php echo $row["price"] ?>"><br>
                <p><button type="submit" class="editbtn" name="updateBtn">Add to cart</button></p>
            </div>
        </div>

        <div class="items">

            <div class="item-card">
                <img class="image2" src="images/SBB.jpg" alt="beard12" style="width:100%">
                <input type="text" name="style" value="<?php echo $row["style"] ?>"><br>
                <input type="text" name="price" value="<?php echo $row["price"] ?>"><br>
                <p><button type="submit" class="editbtn" name="updateBtn">Add to cart</button></p>
            </div>

            <div class="item-card">
                <img class="image2" src="images/SB.jpg" alt="beard12" style="width:100%">
                <input type="text" name="style" value="<?php echo $row["style"] ?>"><br>
                <input type="text" name="price" value="<?php echo $row["price"] ?>"><br>
                <p><button type="submit" class="editbtn" name="updateBtn">Add to cart</button></p>
            </div>

            <div class="item-card">
                <img class="image2" src="images/FB.jpg" alt="beard12" style="width:100%">
                <input type="text" name="style" value="<?php echo $row["style"] ?>"><br>
                <input type="text" name="price" value="<?php echo $row["price"] ?>"><br>
                <p><button type="submit" class="editbtn" name="updateBtn">Add to cart</button></p>
            </div>
        </div>
    </form>




          <!-- End Administrator Record -->

<?php
        }

        // If result is less than 0
    // } else {
    //     echo "No Administrator found by the this id";
    // }
    $conn->close();
} else {
    header('location: staff.php');
}

?>