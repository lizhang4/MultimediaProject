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
        <img src="./imgs/ExCarousel3.png" alt="">
        <h4>Welcome to about page</h4>
    </section>
    <!-- End About Us Page Carousel Section-->

    <!-- About Us Section -->
    <section class="feature-posts p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box my-3 p-0 h-100 w-100 ">
            <div class="box-1 row m-0 my-5 p-0 py-3">
                <h4 class="m-0 p-0 col-lg-2 col-md-2 col-12 text-center text-md-start my-3">About Us</h4>
                <div class="col-lg-4 col-md-2 col-0"></div>
                <div class="col-lg-6 col-md-8 col-12" >
                    <p>The principal goals of the Dynasty Museum are to collect, preserve, research, publish, and exhibit distinguished examples representing the art of the ancient chinese cold-weapons. Ancient chinese cold-weapons have been a vital part of the chinese cultures for thousands of years, pivotal not only in conquest and defense, but also in court pageantry and ceremonial events.</p>
                    <p>Throughout time the best weapons have represented the highest artistic and technical capabilities of the society and period in which they were made, forming a unique aspect of both art history and material culture.</p>
                    <p>The Dynasty gallery of weapons is a modern one, formed through the activities and interests of curators, trustees, private collectors, and donors over the past 125 years. The gallery comprises approximately 100 objects from the Ancient Three Kingdom. It is one of the most comprehensive and encyclopedic galleries of its kind.</p>    
                </div>

            </div>

            <div class="box-1 row m-0 my-5 p-0 py-3">
                <h4 class="m-0 p-0 col-lg-2 col-md-2 col-12 text-center text-md-start my-3">FAQ</h4>
                <div class="col-lg-4 col-md-2 col-0"></div>
                <div class="col-lg-6 col-md-8 col-12" >
                    <p style="font-weight: 600; color: black">Do you have a physical centre?</p>
                    <p>Yes, we do have a physical centre. Find out more by clicking <a href="./visit.php" style="font-weight: 700;">here</a></p>
                    <p style="font-weight: 600; color: black">Do you host all the exhibition in your centre?</p>
                    <p>No, we do host some exhibition from time to time but most of the exhibitions are from other places.</p>
                    <p style="font-weight: 600; color: black">How can I buy a ticket to the exhibition?</p>
                    <p>Ticket purchasing is not available on our page yet. However you can purchase it by searching for the keywords on google.</p>
    
                </div>

            </div>

            <div class="box-1 row m-0 my-5 p-0 py-3">
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

</div>



<?php
    include_once "footer.php";
?>