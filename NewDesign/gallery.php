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

    <!-- Gallery Page Carousel Section -->
    <section class=" gallery-carousel d-flex flex-column">
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

</div>


    <!-- Handlebars JS -->
    <script id="weapon-card-template" type="text/x-handlebars-template">
        {{#each weapons}}
            <a href="" class="image {{weaponType}} itembox slideup" data-bs-toggle="modal" data-bs-target="#weapon{{@index}}" >
                <div class="content">
                    <img src="{{imageUrl}}" alt="">
                    <div class="overlay"></div>
                    <div class="info d-flex flex-column justify-content-start align-self-start">
                        <h4>{{name}}</h4>
                        <p>{{weilder}}</p>
                    </div>
                </div>
                
                <div class="modal fade" id="weapon{{@index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body d-flex flex-md-row justify-content-md-around align-items-md-center">
                                <div class="box d-md-flex d-none">
                                    <div class="content">
                                        <img src="{{imageUrl}}" alt="">
                                    </div>
                                </div>
                                <!-- <img src="./imgs/DaoCoverEdited.png" alt=""> -->
                                <div class="d-flex flex-column box-2 align-items-center justify-content-center">
                                    <i class="fas fa-caret-up"></i>
                                    <div class="information d-flex flex-column align-content-center justify-content-start">
                                        <h1>{{name}}</h1>
                                        <h2><span>Weapon type:</span> {{weaponType}}</h2>
                                        <h2><span>Owner:</span> {{weilder}}</h2>
                                        <h2><span>DOB:</span> {{date}}</h2>
                                        <p>{{description}}</p>
    
                                    </div>
                                    <i class="fas fa-caret-down"></i>

                                </div>
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