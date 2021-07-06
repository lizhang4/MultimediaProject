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
        <img src="./imgs/tumblr_morjixuQbE1rx8jvdo1_640.jpg" alt="">
        <h4>Welcome to about page</h4>
    </section>
    <!-- End About Us Page Carousel Section-->

    <!-- About Us Section -->
    <section class="feature-posts p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box my-3 p-0 h-100 w-100 slideup">
            <div class="box-1 row m-0 my-5 p-0 py-3">
                <h4 class="m-0 p-0 col-lg-2 col-md-2 col-12 text-center text-md-start my-3">About Us</h4>
                <div class="col-lg-4 col-md-2 col-0"></div>
                <div class="col-lg-6 col-md-8 col-12" >
                    <p>The principal goals of the Dynasty Museum are to collect, preserve, research, publish, and exhibit distinguished examples representing the art of the ancient chinese cold-weapons. Ancient chinese cold-weapons have been a vital part of the chinese cultures for thousands of years, pivotal not only in conquest and defense, but also in court pageantry and ceremonial events.</p>
                    <p>Throughout time the best weapons have represented the highest artistic and technical capabilities of the society and period in which they were made, forming a unique aspect of both art history and material culture.</p>
                    <p>The Dynasty gallery of weapons is a modern one, formed through the activities and interests of curators, trustees, private collectors, and donors over the past 125 years. The gallery comprises approximately 100 objects from the Ancient Three Kingdom. It is one of the most comprehensive and encyclopedic galleries of its kind.</p>    
                </div>

            </div>

            <div class="box-1 row m-0 my-5 p-0 py-3 slideup">
                <h4 class="m-0 p-0 col-lg-2 col-md-2 col-12 text-center text-md-start my-3">FAQ</h4>
                <div class="col-lg-4 col-md-2 col-0"></div>
                <div class="col-lg-6 col-md-8 col-12" >
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
    
                </div>

            </div>

            <div class="box-1 row m-0 my-5 p-0 py-3 slideup">
                <h4 class="m-0 p-0 col-lg-2 col-md-2 col-12 text-center text-md-start my-3">Contact Us</h4>
                <div class="col-lg-4 col-md-2 col-0"></div>
                <div class="col-lg-6 col-md-8 col-12" >
                    <p><span>You can find us here:</span> England ,Glasgow, 4578 Marmora Road</p>
                    <p><span>Phone:</span> +6012345678</p>
                    <p><span>Monday to Friday</span> from 9.00am to 8.00pm</p>
                    <p><span>Saturday</span> from 10.00am to 6.00pm</p>
                    <p>info.dynastymuseum@dm.com</p>
    
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->


    
    <!-- Footer Section -->
    <footer class=" p-0 d-flex flex-column align-items-center justify-content-start">
            
            <div class="col-12 order-2 social-media-container d-flex justify-content-between align-align-items-end">
            <div class="social-handles">
                <a href="https://www.instagram.com/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.linkedin.com">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="pages-link">
                <a href="about.php" class="about-us">About Us</a>
                <a href="about.php" class="faq">FAQ</a>
                <a href="about.php" class="contact-us">Contact Us</a>
            </div>
    
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->
</div>



<?php
    include_once "footer.php";
?>