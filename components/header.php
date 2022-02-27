<?php 
    $page = basename($_SERVER['PHP_SELF']);
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/header.css">
</head>
<body>
<div id="navbar">
        
        <ul id="l-nav">
            <li class="<?php if($page == 'index.php'){ echo ' active';}?>"><a href="index.php"><img src="../images/logo_transparent.png" alt="Logo"></a></li>
            <li class="<?php if($page == 'index.php'){ echo ' active';}?>"><a href="index.php">Home</a></li>
            <li class="<?php if($page == 'products.php'){ echo ' active';}?>"><a href="products.php">Products</a></li>
            <li class="<?php if($page == 'rooms.php'){ echo ' active';}?>"><a href="rooms.php">Rooms</a></li>
            <li class="<?php if($page == 'contact-us.php'){ echo ' active';}?>"><a href="contact-us.php">Contact Us</a></li>
            <li class="<?php if($page == 'about-us.php'){ echo ' active';}?>"><a href="about-us.php">About Us</a></li>
        </ul>
        <ul id="r-nav">
        <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 1 ){ ?>
            <li class="<?php if($page == 'dashboard.php'){ echo ' active';}?>"><a href="dashboard.php">Dashboard</a></li>
        <?php } else {  ?>
            <li class="<?php if($page == 'cart.php'){ echo ' active';}?>"><a href="cart.php"><img src="../images/cart-icon.jpg" alt="Cart"></a></li>
        <?php } ?>    
        <?php if(isset($_SESSION['is_logged_in'])){ ?>
                <li><a href="logout.php">Log Out</a></li>
        <?php } else {?>       
            <li class="<?php if($page == 'login.php'){ echo ' active';}?>">
                            <a href="login.php" class="button1">
                               Log In
                            </a>
                            </li>
                    <?php }?>
        </ul>

    
</div>
