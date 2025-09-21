<!-- header section-->
<?php session_start() ?>
<?php const CURRENT_URL = "http://localhost/travel/" ;?>

<header>
    <input type="checkbox" id="input_menu" class="input_menu">
    <div class="humborger"></div>
    <!-- <div id="menu-bar" class="fa-solid fa-bars"></div> -->
    <a href="<?php echo CURRENT_URL ?>" class="logo"><span>T</span>ravel<span>G</span>o</a>

    <nav class="navbar">
        <a href="<?php echo CURRENT_URL ?>">home</a>
        <a href="<?php echo CURRENT_URL ?>#book">book</a>
        <a href="<?php echo CURRENT_URL ?>#packages">packages</a>
        <a href="<?php echo CURRENT_URL ?>#services">services</a>
        <a href="<?php echo CURRENT_URL ?>#gallery">gallery</a>
        <a href="<?php echo CURRENT_URL ?>#review">review</a>
        <a href="<?php echo CURRENT_URL ?>#contact">contact</a>
    </nav>

    <!-- <select id="language-select" onchange="changeLanguage()">
        <option value="en">English</option>
        <option value="fr">Français</option>
        <option value="ar">العربية</option>
    </select> -->
    <!-- <div id="language-select">

    </div> -->
    <?php if(empty($_SESSION["username"])){ ?>
    <div class="login_system">

        <ul>
            <li><a href="<?php echo CURRENT_URL ?>auth/login.php">Login</a></li>
            <li><a href="<?php echo CURRENT_URL ?>auth/register.php">Register</a></li>
        </ul>
    </div>
    <?php }else{ ?>

    <div class="setting">
        <!-- <div class="switch">
            
        </div> -->
        <ul class="ulSettMode">
            <li class="switch">
                <label>
                    <input type="checkbox" id="mode-toggle">
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </label>

            </li>
            <li id="setting_toggle" class="settingElement">
                <i id="settIcon" class="fa-solid fa-gear"></i>
                <ul id="dropdownMenu" class="dropdown">
                  <li><a href="">Profile</a></li>
                  <hr>
                  <li><a href="">Settings</a></li>
                  <hr>
                  <li><a href="<?php echo CURRENT_URL?>auth/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>

    </div>
    <?php } ?>


</header>

<script src="js/header.js">

</script>
<!-- header section end -->