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

    <!-- Gallery Page Carousel Section -->
    <section class="gallery-carousel d-flex flex-column">
        <img src="./imgs/tumblr_morjixuQbE1rx8jvdo1_640.jpg" alt="">
        <h4>Welcome to gallery page</h4>
    </section>
    <!-- End Gallery Page Carousel Section -->

    <!-- Gallery Posts Section -->
    <section class="feature-posts  p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box d-flex justify-content-between align-items-center ">
            <h4>Gallery</h4>
            <div class="filter d-none d-lg-flex">
                <h4 class="list" data-filter="Sword">Sword</h4>
                <h4 class="list" data-filter="Dao">Dao</h4>
                <h4 class="list" data-filter="Spear">Spear</h4>
                <h4 class="list" data-filter="Axe">Axe</h4>
                <h4 class="list" data-filter="Others">Others</h4>
                <h4 class="list active" data-filter="All" >All</h4>
            </div>
        </div>

        <div class="bottom-box" id="weapon-list">

            <!-- Gallery will be render by Handlebars JS-->

        </div>
    </section>
    <!-- End Gallery Posts Section -->


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


    <!-- Handlebars JS -->
    <script id="weapon-card-template" type="text/x-handlebars-template">
        {{#each weapons}}
            <a href="" class="image {{weaponType}} itembox" data-bs-toggle="modal" data-bs-target="#weapon{{@index}}" >
                <div class="content">
                    <img src="{{imageUrl}}" alt="">
                    <div class="overlay"></div>
                    <div class="info d-flex flex-column justify-content-start align-self-start">
                        <h4>{{name}}</h4>
                        <p>{{weilder}}</p>
                    </div>
                </div>
                
                <div class="modal fade" id="weapon{{@index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./imgs/DaoCoverEdited.png" alt="">
                            <h4>Weilder: {{weilder}}</h4>
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
    <!-- End Handlebars JS -->


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