<?php
    session_start();
?>

<?php
    include_once 'header.php';
?>

<div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">

    <!-- TOP Carousel Section -->
    <section class="top-carousel d-flex justify-content-center align-items-center">
           <div class="swiper-container topSwiper w-100 h-100">
               <div class="swiper-wrapper w-100 h-100 border ">
                   <div class="swiper-slide item d-flex flex-column justify-content-center align-items-center">
                       <!-- <img src="./imgs/TopCarousel.png" alt=""> -->
                       <h1 class="text-uppercase">Dynasty</h1>
                       <h5 class="text-uppercase">Weapon Museum</h5>
                       <div class="line"></div>


                   </div>
                   <div class="swiper-slide item">
                       <img src="./imgs/TopCarousel-2.png" alt="">
                   </div>
                   <div class="swiper-slide item">
                       <img src="./imgs/荣耀战魂(For Honor) 剑客4k 游戏壁纸壁纸.jpg" alt="">
                   </div>
                   
               </div>
    
               <div class="swiper-pagination"></div>
           </div>
    
        </section>
    <!-- End TOP Carousel Section -->

    <!-- About Section -->
        <section class="about">
            <div class="upper-box d-flex  justify-content-between align-items-center ">
                <h4>About</h4>
                <a href="./about.php" class="d-flex align-items-center justify-content-around">
                    <i class="fas fa-chevron-right"></i>
                    <h4>See More</h4>
                </a>
            </div>
            <div class="lower-box row d-flex justify-content-around align-items-center h-100 w-100 m-0 p-0 slideup">
                <div class="d-none d-md-flex col-md-6 flex-column align-items-center justify-content-center h-100">
                    <div class="img">
                        <img src="./imgs/aboutSword.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center h-100">
                    <div class="img d-block d-md-none">
                        <img src="./imgs/aboutSword.png" alt="">
                    </div>
                    <h1 class="text-uppercase text-center">Dynasty Museum</h1>
                    <p class="text-center">The principal goals of the Dynasty Museum are to collect, preserve, research, publish, and exhibit distinguished examples representing the art of the ancient chinese cold-weapons. Ancient chinese cold-weapons have been a vital part of the chinese cultures for thousands of years, pivotal not only in conquest and defense, but also in court pageantry and ceremonial events.</p>
                    <a href="./about.php">See More</a>
                </div>
                <div class="col-0 col-md-1"></div>
            
            
            </div>
        </section>



    <!-- End About Section -->

    
    <!-- Feature Posts Section -->
        <section class="feature-posts  p-0 m-0 d-flex flex-column align-items-center justify-content-center">
            <div class="upper-box d-flex justify-content-between align-items-center ">
                <h4>Feature Posts</h4>
                <a href="./gallery.php" class="d-flex align-items-center justify-content-around">
                    <i class="fas fa-chevron-right"></i>
                    <h4>See More</h4>
                </a>
            </div>
    
            <div class="bottom-box" id="weapon-list">
                
                <!-- Weapon list will be render by Handlebars JS -->
                
            </div>
            
    
        </section>
    <!-- End Feature Posts Section -->
    
    
    <!-- Exhibition Carousel Section -->
        <section class="exhibition-carousel p-0 m-0 d-flex flex-column align-items-center justify-content-center">
            <div class="upper-box d-flex justify-content-between align-items-center ">
                <h4>Recent Exhibitions</h4>
                <a href="exhibition.php" class="d-flex align-items-center justify-content-around">
                    <i class="fas fa-chevron-right"></i>
                    <h4>See More</h4>
                </a>
            </div>
            <div class="lower-box slideup">
                <div class="swiper-container exhibitionSwiper w-100 h-100">
                    <div class="swiper-wrapper w-100 h-100">
                        <div class="swiper-slide w-100 h-100">
                            <div class="upper-content">
                                <img src="./imgs/tumblr_morjixuQbE1rx8jvdo1_640.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h5>Sword Exhibition</h5>
                                <p>2021/6/15 - 25</p>
                            </div>
                            
                        </div>
                        <div class="swiper-slide w-100 h-100">
                            <div class="upper-content ">
                                <img src="./imgs/tumblr_morjixuQbE1rx8jvdo1_640.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h5>Sword Exhibition</h5>
                                <p>2021/6/15 - 25</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <!-- End Exhibition Carousel Section -->
    
    
    <!-- Footer Section -->
        <footer class=" p-0 d-flex flex-column align-items-center justify-content-start">
            <!-- <div class="upper-box d-flex justify-content-center align-items-center d-block d-md-none">
                <h2>Dynasty Museum</h2>
            </div>
            <div class="lower-box d-flex justify-content-center justify-content-md-between align-items-start row slideup">
                <div class="col-md-6 order-md-0 order-1 col-12 left-container">
                    <h2 class="d-none d-md-block">Dynasty Museum</h2>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique molestiae modi voluptatum voluptate numquam hic aliquam accusantium nobis nemo alias laudantium, atque voluptatem ipsam dolores asperiores quaerat harum nesciunt blanditiis?</p>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique molestiae modi voluptatum voluptate numquam hic aliquam accusantium nobis nemo alias laudantium, atque voluptatem ipsam dolores asperiores quaerat harum nesciunt blanditiis?</p>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique molestiae modi voluptatum voluptate numquam hic aliquam accusantium nobis nemo alias laudantium, atque voluptatem ipsam dolores asperiores quaerat harum nesciunt blanditiis?</p>
                </div>
                <div class="col-md-6 order-md-1 order-0 col-12 right-container my-md-0 my-4" >
                    <img src="./imgs/sculpture-2013048_1920.jpg" alt="">
                </div> -->
                <div class="col-12 order-2 social-media-container d-flex justify-content-center align-items-center">
                    <i class="fab fa-facebook m-3"></i>
                    <i class="fab fa-facebook m-3"></i>
                    <i class="fab fa-facebook m-3"></i>
        
                </div>
            </div>
        </footer>


    <!-- End Footer Section -->
    
    
    
        <!-- Login Form -->
        <div class = "login">
            <button class = "login_close">&times;</button>
            <header>Login</header>
            <form id = "form1" action = "./action.php" method="POST" onsubmit="return loginErrorHandler()">
                <div class="field username">
                    <div class="input-area">
                        <input type = "text" placeholder= "USERNAME" name="username">
                        <i class = "icon fas fa-user-alt"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Username can't be blank</div>
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type = "password" placeholder= "PASSWORD" name="password">
                        <i class = "icon fas fa-lock"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Password can't be blank</div>
                </div>
                <input type = "submit" value = "submit" class = "submit" name="submit">
            </form>
            <button class = "register_open register-open-button">Register?</button>
    
    
        </div>
        <!-- End Login Form -->
    
    
        <!-- Register Form -->
        <div class = "register">
            <button class = "register_close">&times;</button>
            <header>Register</header>
            <form id = "form2" action = "./action.php" method="post" onsubmit="return registrationErrorHandler()">
                <div class="field username">
                    <div class="input-area">
                        <input type = "text" id="#username" name="uid" placeholder= "USERNAME">
                        <i class = "icon fas fa-user-alt"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text error-text-username"></div>
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type = "password" name="pwd" placeholder= "PASSWORD">
                        <i class = "icon fas fa-lock"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Password can't be blank</div>
                </div>
                <div class="field repassword">
                    <div class="input-area">
                        <input type = "password" name="pwdrepeat" placeholder= "RE-ENTER PASSWORD">
                        <i class = "icon fas fa-lock"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Password can't be blank</div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type = "text" name="email" placeholder= "EMAIL">
                        <i class = "icon fas fa-envelope"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Email can't be blank</div>
                </div>
                <button type="submit" name="submit" class="submit"></button>
            </form>
    
            <button class = "login-button login-open-button">Login?</button>
        </div>
        <!-- End Register Form -->
    
</div>



   



    <!-- Handlebars JS template -->
    <script id="weapon-card-template" type="text/x-handlebars-template">
        {{#each weapons}}
            {{#lesserThan @index 8}}
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
            {{else}}

            {{/lesserThan}}

        {{/each}}
    </script>

    <!-- End Handlebars JS template -->

     <!-- Swiper JS -->
     <script>
        var exhibitionSwiper = new Swiper(".exhibitionSwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var topSwiper = new Swiper(".topSwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        
      </script>
    <!-- End Swiper JS -->

    


<?php
    include_once 'footer.php';
?>