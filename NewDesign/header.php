<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css" integrity="sha512-eeBbzvdY28BPYqEsAv4GU/Mv48zr7l0cI6yhWyqhgRoNG3sr+Q2Fr6751bA04Cw8SGUawtVZlugHm5H1GOU/TQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="stylesheet" href="./CSS/gallery.css">
    <link rel="stylesheet" href="./CSS/animation.css">
    <title>Document</title>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/2cb5c720d7.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    
    <script src="./JS/handlebars-v4.7.7.js"></script>
     


    
</head>
<body>
    <!-- Navbar Section -->
    <nav class="m-0 p-0 d-flex align-items-center nav navExpand">
        <div class="nav-container row m-0 p-0">
            <div class="inner-container row p-0 ">

                <div class="col-xl-4 col-lg-3 col-sm-6 col-6 logo d-flex align-items-center p-0">
                    <a href=""><img src="./imgs/Logo.svg" alt=""></a>
                </div>
                
                <div class="col-xl-4 col-lg-6 d-none center-nav d-lg-flex justify-content-around align-items-center">
                    <a href="./index.php" class="mx-4 <?= ($activePage == 'index') ? 'active':''; ?>">Home</a>
                    <a href="./gallery.php" class="mx-4 <?= ($activePage == 'gallery') ? 'active' : ''; ?>">Gallery</a>
                    <a href="./exhibition.php" class="mx-4 <?= ($activePage == 'exhibition') ? 'active' : ''; ?>">Exhibition</a>
                    <a href="./about.php" class="mx-4 <?= ($activePage == 'about') ? 'active' : ''; ?>">About</a>
                </div>
                <div class="col-xl-4 col-lg-3 d-none d-lg-flex justify-content-end align-items-center p-0">
                     <?php
                        if(isset($_SESSION['username']))
                        {
                    ?>
    
                        <h5 class="m-3">Hi, <?php echo $_SESSION['username'];?></h5>
                        <button class="logout-button">Logout</button>

                        <!-- <button class="" id="logout" >LOGOUT</button> -->
                    
                    <?php
                    }
                        else
                        {
                    ?>
                        <button class="login-button">Sign in</button>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-sm-6 col-6 d-flex d-lg-none justify-content-end align-items-center m-0 p-0">
                    <button id="nav-open">open</button>
                </div>

            </div>
        </div>
        
        
    </nav>
    <div class="nav-popup flex-column align-items-center justify-content-center ">
        <a href="./index.php" class="m-4 <?= ($activePage == 'index') ? 'active':''; ?>">Home</a>
        <a href="./gallery.php" class="m-4 <?= ($activePage == 'gallery') ? 'active' : ''; ?>">Gallery</a>
        <a href="./exhibition.php" class="m-4 <?= ($activePage == 'exhibition') ? 'active' : ''; ?>">Exhibition</a>
        <a href="./about.php" class="m-4 <?= ($activePage == 'about') ? 'active' : ''; ?>">About</a>

        <?php
            if(isset($_SESSION['username']))
            {
        ?>

            <a class="m-4 logout-button" >Logout</a>

            <!-- <button class="" id="logout" >LOGOUT</button> -->
        
        <?php
        }
            else
            {
        ?>
            <a class="login-button m-4">Sign in</a>
        <?php
        }
        ?>
    </div>
    </div>
    <!-- End Navbar Section -->

    <script>
        $("#nav-open").click(function () { 
            if( $(".nav-popup").css("display") == "flex") {
                $(".nav-popup").slideUp();
            }
            else {
                $(".nav-popup").slideDown({
                    start: function () {
                        $(this).css({
                            display: "flex"
                        });
                    }
                });

            }
        });

    </script>