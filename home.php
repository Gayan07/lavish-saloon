<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVISH</title>
    <script src="public/js/slideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/template.css">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
    <link rel="icon" type="image/png" href="public/images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php require 'includes/header.php'; ?>




    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="public/images/one.jpg" style="width:100% ; height: 480px">
            <div class="reserve">

            </div>
        </div>

        <div class="mySlides fade">
            <img src="public/images/two.jpg" style="width:100% ; height: 480px">
            <div class="reserve">

            </div>
        </div>

        <div class="mySlides fade">
            <img src="public/images/three.jpg" style="width:100% ; height: 480px">
            <div class="reserve">

            </div>
        </div>

        <div class="mySlides fade">
            <img src="public/images/four.jpg" style="width:100%; height: 480px;">
            <div class="reserve">

            </div>
        </div>

      <br>
      <br>
      <br>


        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>

            <br>
      <br>
      <br>
        </div>
        <script>
            var slideIndex = 0;
            showSlides();
        </script>
    

</div>


    <?php require 'includes/footer.php'; ?>


</body>