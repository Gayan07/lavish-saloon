<?php
    require './controllers/db.php'
?>
<header>
    <div>
        <ul>
            <li class="dropdown"><a class="dropbtn"><i class="fa fa-toggle-down fa-spin fa-1x fa-fw"></i><?php  if(isset($_SESSION["logged_user_fname"])){ echo $_SESSION["logged_user_fname"]; }  ?></i></a>
                <div class="dropdown-content">
                    <a href="profile.php">PROFILE</a>
                    <a href="logout.php">LOG OUT</a>
                </div>
            </li>
            <li><a href="#news"><i class="fa fa-fw fa-home fa-spin fa-1x fa-fw"></i>Home</a></li>
            <div>
                <p>- MAKE YOUR LOOK FRESH -</p>
            </div>
        </ul>
    </div>
</header>
