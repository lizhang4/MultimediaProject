<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == '') {
        header("Location: http://localhost/multimediaproject/newdesign/index.php");
        die();
    }
?>

<?php
    include_once 'header.php';
?>

<div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">

    <!-- About Us Page Carousel Section-->
    <section class=" gallery-carousel d-flex flex-column">
        <img src="./imgs/ExCarousel.png" alt="">
        <h4>Visit us now</h4>
    </section>
    <!-- End About Us Page Carousel Section-->

    <!-- About Us Section -->
    <section class="feature-posts p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box d-flex justify-content-between align-items-center ">
            <h4>Find us here</h4>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3444.224277841487!2d120.1366724516063!3d30.316137841234898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x344b621fde1e6cd7%3A0x4aeb25871fa2e025!2sChina%20Knives%2C%20Scissors%20and%20Swords%20Museum!5e0!3m2!1sen!2smy!4v1625584937777!5m2!1sen!2smy"  allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- End About Us Section -->

</div>



<?php
    include_once "footer.php";
?>