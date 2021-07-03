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
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
    
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
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente rem ullam dignissimos? Iste, error harum. Alias quae voluptatibus iure, illum iusto veritatis dolores aut veniam dolorum, vitae enim temporibus eum?</p>
    
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->


    
    <!-- Footer Section -->
    <footer class=" p-0 py-5 d-flex flex-column align-items-center justify-content-start h-50 my-5">
        <div class="lower-box d-flex justify-content-center justify-content-md-between align-items-start row">
            
            <div class="col-12 order-2 social-media-container d-flex justify-content-center align-items-center">
                <i class="fab fa-facebook m-3"></i>
                <i class="fab fa-facebook m-3"></i>
                <i class="fab fa-facebook m-3"></i>
    
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->



<?php
    include_once "footer.php";
?>