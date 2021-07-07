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


    <!-- Exhibition Page Carousel Section -->
    <section  class=" gallery-carousel d-flex flex-column">
        <img src="./imgs/Exhibition3.png" alt="">
        <h4>Welcome to exhibition page</h4>
    </section>
    <!-- End Exhibition Page Carousel Section -->


    <!-- Exhibition Posts Section -->
    <section class="feature-posts  p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box d-flex justify-content-between align-items-center ">
            <h4>Exhibition</h4>
            <div class="d-flex p-0 m-0 justify-content-center align-items-center">
                <h4 class="m-0 px-3">Select: </h4>
                <div class="select-box d-flex flex-column p-0 m-0 justify-content-center align-items-end">
                    
                    <div class="options-container order-1 p-0 m-0">
                        <div class="option">
                            <input type="radio" class="radio" id="all" name="category" data-filter="All">
                            <label for="all" class="px-1">All Exhibitions</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="ongoing" name="category" data-filter="Ongoing">
                            <label for="ongoing" class="px-1">Ongoing Exhibitions</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="past" name="category" data-filter="Past">
                            <label for="past" class="px-1">Past Exhibitions</label>
                        </div>
                        
                    </div>
                    <div class="selected order-0 px-1 m-0 d-flex justify-content-between align-items-center">All Exhibitions <i class="fas fa-angle-down m-0 px-2 py-2"></i></div>
                </div>
            </div>
            
        </div>

        <div class="bottom-box" id="exhibition-list">

            <!-- exhibition list will be render by Handlebars JS-->

        </div>
    </section>
    <!-- End Exhibition Posts Section -->

</div>


    <!-- Handlebar JS -->
    <script id="exhibition-card-template" type="text/x-handlebars-template">
        {{#each exhibitions}}
            <a href="" class="image itembox slideup" data-bs-toggle="modal" data-bs-target="#exhibition{{@index}}" >
                <div class="content">
                    <img src="{{imageUrl}}" alt="">
                    <div class="overlay"></div>
                    <div class="info d-flex flex-column justify-content-start align-self-start">
                        <h4>{{name}}</h4>
                        <p>{{date}}</p>
                    </div>
                </div>

                <div class="modal fade" id="exhibition{{@index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
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
                                        <h2><span>Location:</span> {{location}}</h2>
                                        <h2><span>Date:</span> {{date}}</h2>
                                        <h2><span>Price:</span> {{price}}</h2>
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
    <!-- End Handlebar JS -->



    <!-- Filter Function -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.radio').click(function() {
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $('.itembox').show('1000');
                }
                else {
                    $('.itembox').not('.'+value).hide('1000');
                    $('.itembox').filter('.'+value).show('1000');
                }
                
                // $('.dynasty-info').each(function() {
                //     if($(this).hasClass(value)) {
                //         $(this).show();
                //     }
                //     else {
                //         $(this).hide();
                //     }
                // });


                $(this).addClass('active').siblings().removeClass('active'); 
                
            });
        });

    </script>

    <!-- End Filter Function -->

<?php
    include_once "footer.php";
?>