<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <script src="public/js/slideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/services.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php require 'includes/header.php'; ?>




    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="public/images/1.jpg" style="width:100% ; height: 480px">
            <div class="reserve">

            </div>
        </div>

        <div class="mySlides fade">
            <img src="public/images/2.jpg" style="width:100% ; height: 480px">
            <div class="reserve">

            </div>
        </div>

        <div class="mySlides fade">
            <img src="public/images/3.jpg" style="width:100% ; height: 480px">
            <div class="reserve">

            </div>
        </div>

        <div class="mySlides fade">
            <img src="public/images/4.jpg" style="width:100%; height: 480px;">
            <div class="reserve">

            </div>
        </div>

        <div class="mySlides fade">
            <img src="public/images/7.jpg" style="width:100%; height: 480px;">
            <div class="reserve">

            </div>
        </div>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>


        </div>
        <script>
            var slideIndex = 0;
            showSlides();
        </script>
    </div>
    <div class="classes">
        <div class="box">
            <button class="btn">Men Style<img src="public/images/3.jpg" alt="Snow"></button>
        </div>

        <div class="box">
            <button class="btn">Women Style<img src="public/images/5.jpg" alt="Snow"></button>
        </div>

        <div class="box">
            <button class="btn">Beard<img src="public/images/7.jpg" alt="Snow"></button>
        </div>

        <div class="box">
            <button class="btn">Facial<img src="public/images/3.jpg" alt="Snow"></button>
        </div>
    </div>


    <?php require 'includes/footer.php'; ?>


</body>