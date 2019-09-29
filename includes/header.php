<?php 
    session_start();
    
?>

<header>
    <div>
        <ul>
            <?php
            if(!isset($_SESSION['logged_user_email'])){
            ?>
                <li><a href="login.php"><i class="fa fa-sign-in  fa-1x fa-fw"></i> Log In</a></li>
                <li><a href="registration.php"><i class="fa fa-user-circle  fa-1x fa-fw"></i>Sign Up</a></li>
            <?php 
            
            }else{
            ?>
                <li><a href="#"><i class="fa fa-user-circle  fa-1x fa-fw"></i><?php echo $_SESSION['logged_user_fname']." ".$_SESSION['logged_user_lname'] ?></a></li>
                <li class="dropdown"><a class="dropbtn"><i class="fa fa-toggle-down fa-1x fa-fw"></i></i><a href="logout.php">LOG OUT</a><li>
            <?php
            
            }
            ?>
            <li><a href="#home"><i class="fa fa-child  fa-1x fa-fw"></i></i>About Us</a></li>
            <li><a href="appointment.php"><i class="fa fa-calendar-check-o  fa-1x fa-fw"></i>Appointment</a></li>
            <li class="services.php"><a href="services.php"><i class="fa fa-toggle-down  fa-1x fa-fw"></i>Services</i></a>
            
            <li><a href="home.php"><i class="fa fa-fw fa-home fa-1x fa-fw"></i>Home</a></li>
            <div>
                <p>- MAKE YOUR LOOK FRESH -</p>
            </div>
        </ul>
    </div>
</header>