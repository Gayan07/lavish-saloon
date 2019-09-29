<?php
    session_start();
    require './controllers/db.php'
?>
<header>
    <div>
        <ul>
            <li class="dropdown"><a class="dropbtn"><i class="fa fa-toggle-down fa-1x fa-fw"></i></i><a href="logout.php">LOG OUT</a><li><i class="fa fa-user-circle  fa-1x fa-fw"></i><?php echo $_SESSION['logged_user_fname']." ".$_SESSION['logged_user_lname'] ?></a></li></a>
                
            </li>
            <li><a href="index.php"><i class="fa fa-fw fa-home fa-1x fa-fw"></i>Home</a></li>
            <div>
                <p>- MAKE YOUR LOOK FRESH -</p>
            </div>
        </ul>
    </div>
</header>
