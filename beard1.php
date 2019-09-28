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
    <form action="addcartdb.php" method='POST'>
        <div class="items">

            <div class="item-card">
                <img class="image1" src="public/images/TB.jpg" alt="beard12" style="width:100%">
                <h1>Thick Beard</h1>
                <p class="price">RS.350.00</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="item-card">
                <img class="image1" src="public/images/B1.jpg" alt="beard12" style="width:100%">
                <h1>Lined-up beard</h1>
                <p class="price">RS.350.00</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="item-card">
                <img class="image1" src="public/images/LBs.jpg" alt="beard12" style="width:100%">
                <h1>Long beard</h1>
                <p class="price">RS.350.00</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>

        <div class="items">

            <div class="item-card">
                <img class="image2" src="public/images/SBB.jpg" alt="beard12" style="width:100%">
                <h1>Short-box beard</h1>
                <p class="price">RS.350.00</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="item-card">
                <img class="image2" src="public/images/SB.jpg" alt="beard12" style="width:100%">
                <h1>Balbo beard</h1>
                <p class="price">RS.350.00</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="item-card">
                <img class="image2" src="public/images/FB.jpg" alt="beard12" style="width:100%">
                <h1>Fade beard</h1>
                <p class="price">RS.350.00</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
    </form>
    <?php require '../iwt/includes/footer.php'; ?>
</body>

</html>