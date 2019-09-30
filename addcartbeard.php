<?php
require '../iwt/Admin/controllers/db.php';
// if (isset($_GET['aid'])) {

//     $aid = $_GET['aid'];

// Retrieve query
$sql = "SELECT image, style, price FROM beard ";

// Executing retrieve query
$result = $conn->query($sql);

// Checking result count
if ($result->num_rows > 0) {

    // Displaying result in a while loop
    while ($row = $result->fetch_assoc()) {
        ?>

        <!-- Administrator Record -->
        <form action="payment.php" method='POST'>
            <div class="item-card">
                <img class="image1" src="<?php echo $row["image"] ?>" alt="beard12" style="width:100%">
                <h1><?php echo $row["style"] ?></h1>
                <p class="price"><?php echo $row["price"] ?></p>
                <input type="text" name="style" value="<?php echo $row["style"] ?>" hidden>
                <input type="text" name="price" value="<?php echo $row["price"] ?>" hidden>
                <p><button type="submit" name="add-to-cart">Add to Cart</button></p>
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
