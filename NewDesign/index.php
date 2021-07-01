<?php
    include_once 'header.php';
?>

    


    <div class="top-carousel d-flex justify-content-center align-items-center">
       <div class="swiper-container topSwiper w-100 h-100">
           <div class="swiper-wrapper w-100 h-100 border ">
               <div class="swiper-slide item">
                   <img src="./imgs/荣耀战魂(For Honor) 剑客4k 游戏壁纸壁纸.jpg" alt="">
               </div>
               <div class="swiper-slide item">
                   <img src="./imgs/荣耀战魂(For Honor) 剑客4k 游戏壁纸壁纸.jpg" alt="">
               </div>
               <div class="swiper-slide item">
                   <img src="./imgs/荣耀战魂(For Honor) 剑客4k 游戏壁纸壁纸.jpg" alt="">
               </div>
               
           </div>

           <div class="swiper-pagination"></div>
       </div>

    </div>

    <section class="feature-posts  p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box d-flex justify-content-between align-items-center ">
            <h4>Feature Posts</h4>
            <a href="./gallery.html" class="d-flex align-items-center justify-content-around">
                <i class="fas fa-chevron-right"></i>
                <h4>See More</h4>
            </a>
        </div>

        <div class="bottom-box" id="weapon-list">
            
            <!-- Weapon list will be render by Handlebars JS -->
            
        </div>
        

    </section>

    <section class="exhibition-carousel p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box d-flex justify-content-between align-items-center ">
            <h4>Recent Exhibitions</h4>
            <a href="" class="d-flex align-items-center justify-content-around">
                <i class="fas fa-chevron-right"></i>
                <h4>See More</h4>
            </a>
        </div>
        <div class="lower-box">
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

    <footer class=" p-0 d-flex flex-column align-items-center justify-content-start">
        <div class="upper-box d-flex justify-content-center align-items-center d-block d-md-none">
            <img src="./imgs/Logo.svg" class="" alt="">
        </div>
        <div class="lower-box d-flex justify-content-center justify-content-md-between align-items-start row ">
            <div class="col-md-6 order-md-0 order-1 col-12 left-container">
                <img src="./imgs/Logo.svg" class="d-none d-md-block" alt="">
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique molestiae modi voluptatum voluptate numquam hic aliquam accusantium nobis nemo alias laudantium, atque voluptatem ipsam dolores asperiores quaerat harum nesciunt blanditiis?</p>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique molestiae modi voluptatum voluptate numquam hic aliquam accusantium nobis nemo alias laudantium, atque voluptatem ipsam dolores asperiores quaerat harum nesciunt blanditiis?</p>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique molestiae modi voluptatum voluptate numquam hic aliquam accusantium nobis nemo alias laudantium, atque voluptatem ipsam dolores asperiores quaerat harum nesciunt blanditiis?</p>
            </div>
            <div class="col-md-6 order-md-1 order-0 col-12 right-container my-md-0 my-4" >
                <img src="./imgs/sculpture-2013048_1920.jpg" alt="">
            </div>
            <div class="col-12 order-2 social-media-container d-flex justify-content-center align-items-center">
                <i class="fab fa-facebook m-3"></i>
                <i class="fab fa-facebook m-3"></i>
                <i class="fab fa-facebook m-3"></i>
    
            </div>
        </div>
    </footer>


    <!-- Login Form -->
    <div class = "login">
        <button class = "login_close">&times;</button>
        <header>Login</header>
        <form id = "form1" action = "#">
            <div class="field username">
                <div class="input-area">
                    <input type = "text" placeholder= "USERNAME">
                    <i class = "icon fas fa-user-alt"></i>
                    <i class = "error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-text">Username can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type = "password" placeholder= "PASSWORD">
                    <i class = "icon fas fa-lock"></i>
                    <i class = "error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-text">Password can't be blank</div>
            </div>
            <input type = "submit" value = "submit" class = "submit">
        </form>
        <button class = "register_open register-open-button">Register?</button>


    </div>
    <!-- End Login Form -->


    <!-- Register Form -->
    <div class = "register">
        <button class = "register_close">&times;</button>
        <header>Register</header>
        <form id = "form2" action = "#">
            <div class="field username">
                <div class="input-area">
                    <input type = "text" placeholder= "USERNAME">
                    <i class = "icon fas fa-user-alt"></i>
                    <i class = "error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-text">Username can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type = "password" placeholder= "PASSWORD">
                    <i class = "icon fas fa-lock"></i>
                    <i class = "error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-text">Password can't be blank</div>
            </div>
            <div class="field repassword">
                <div class="input-area">
                    <input type = "password" placeholder= "RE-ENTER PASSWORD">
                    <i class = "icon fas fa-lock"></i>
                    <i class = "error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-text">Password can't be blank</div>
            </div>
            <div class="field email">
                <div class="input-area">
                    <input type = "text" placeholder= "EMAIL">
                    <i class = "icon fas fa-envelope"></i>
                    <i class = "error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-text">Email can't be blank</div>
            </div>
            <input type = "submit" value = "submit" class = "submit">
        </form>

        <button class = "login-button login-open-button">Login?</button>

    </div>
    <!-- End Register Form -->

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


    <!-- Handlebars JS template -->
    <script id="weapon-card-template" type="text/x-handlebars-template">
        {{#each weapons}}
            {{#lesserThan @index 8}}
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
            {{else}}

            {{/lesserThan}}

        {{/each}}
    </script>

    <!-- Handlebars JS template -->



<?php
    include_once 'footer.php';
?>