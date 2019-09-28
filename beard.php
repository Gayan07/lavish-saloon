<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/beard1.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>



<body>


    <?php require '../iwt/includes/header.php'; ?>



    <div class="banner">
        <div class="banner-image">
        </div>
    </div>
    <form action="payment.php" method='POST'>
        <div class="items">

            <?php require '../iwt/addcartdb.php' ?>
        </div>

    </form>
    <?php require '../iwt/includes/footer.php'; ?>
</body>

</html>