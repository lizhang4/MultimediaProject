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

    <!-- Exhibition Page Carousel Section -->
    <section class="gallery-carousel d-flex flex-column">
        <img src="./imgs/4171c15d72a646ab91b75936b46bc799.jpeg" alt="">
        <h4>Welcome to exhibition page</h4>
    </section>
    <!-- End Exhibition Page Carousel Section -->


    <!-- Exhibition Posts Section -->
    <section class="feature-posts  p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box d-flex justify-content-between align-items-center ">
            <h4>Exhibition</h4>
        </div>

        <div class="bottom-box" id="exhibition-list">

            <!-- exhibition list will be render by Handlebars JS-->

        </div>
    </section>
    <!-- End Exhibition Posts Section -->


    
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


    <!-- Handlebar JS -->
    <script id="exhibition-card-template" type="text/x-handlebars-template">
        {{#each exhibitions}}
            <a href="" class="image itembox" data-bs-toggle="modal" data-bs-target="#exhibition{{@index}}" >
                <div class="content">
                    <img src="{{imageUrl}}" alt="">
                    <div class="overlay"></div>
                    <div class="info d-flex flex-column justify-content-start align-self-start">
                        <h4>{{name}}</h4>
                        <p>{{date}}</p>
                    </div>
                </div>
                
                <div class="modal fade" id="exhibition{{@index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./imgs/DaoCoverEdited.png" alt="">
                            <h4>Location: {{location}}</h4>
                            <h4>Date: {{date}}</h4>
                        </div>
                        <div class="modal-footer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sunt culpa nemo dolorem debitis voluptatem! Exercitationem provident odio autem eos libero consequuntur mollitia repellat fugiat, sit, culpa eum corrupti nulla.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </a>

        {{/each}}
    </script>
    <!-- End Handlebar JS -->



    <!-- Filter Function -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.list').click(function() {
                console.log("click");
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $('.itembox').show('1000');
                }
                else {
                    $('.itembox').not('.'+value).hide('1000');
                    $('.itembox').filter('.'+value).show('1000');

                }

                $(this).addClass('active').siblings().removeClass('active');
                
            });

            

        });

    </script>

    <!-- End Filter Function -->

<?php
    include_once "footer.php";
?>