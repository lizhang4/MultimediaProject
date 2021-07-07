<footer class=" p-0 d-flex flex-column align-items-center justify-content-start">
            
        <div class="col-12 order-2 social-media-container d-flex flex-column flex-md-row justify-content-between align-items-center">
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
            <a <?= (empty($_SESSION['username'])) ? 'onclick="openLoginPage()"' : 'href="./about.php"'; ?> class="about-us">About Us</a>
            <a <?= (empty($_SESSION['username'])) ? 'onclick="openLoginPage()"' : 'href="./about.php"'; ?> class="faq">FAQ</a>
            <a <?= (empty($_SESSION['username'])) ? 'onclick="openLoginPage()"' : 'href="./about.php"'; ?> class="contact-us">Contact Us</a>
        </div>

        </div>
    </div>
</footer>


<script src="./JS/logSign.js"></script>
    
    <script>
         $('#form1').submit(function(e){
            if (loginErrorHandler()) {
                $.ajax({
                    type: "POST",
                    url: "action.php",
                    data: $("#form1").serialize(),
                    success:function(data)
                    {
                        if(data == '1')
                        {
                            $('#form1').hide();
                            location.reload();
                        }
                        else if(data == '2')
                        {
                            var form1 = $("#form1");
                            $('.field').each(function () {
                                if($(this).hasClass("password")) {
                                    $(this).addClass("error");
                                    $(this).addClass("shake");
    
                                }
                            });
                            
                            var pass = form1.children(".password");
                            pass.children(".error-text").html("Wrong Password!");
                        }
                        else 
                        {
                            var form1 = $("#form1");
                            $('.field').each(function () {
                                if($(this).hasClass("username")) {
                                    $(this).addClass("error");
                                    $(this).addClass("shake");
    
                                }
                            });
    
                            var username = form1.children(".username");
                            username.children(".error-text").html("Please register!");
    
                        }
                    }
                });
            }
            e.preventDefault();
        });

        $('.logout-button').click(function(){
            var action = 'logout';
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {action:action},
                success:function()
                {
                    $('.login').hide();
                    location.reload();
                }
            });
            e.preventDefault();

        });
        
        $('#form2').submit( function(e) { 
            if(registrationErrorHandler()) {

                $.ajax({
                    type: "POST",
                    url: "action.php",
                    data: $("#form2").serialize(),
                    success:function(data)
                    {
                        if(data == '1')
                        {
                            $('#form2').hide();
                            location.reload();
                        }
                        else if(data == '2')
                        {
                            var form2 = $("#form2");
                            $('.field').each(function () {
                                if($(this).hasClass("username")) {
                                    $(this).addClass("error");
                                    $(this).addClass("shake");
    
                                }
                            });
                                
                            $(".error-text-username").html("Username existed!");
                            $(".error-text-username").addClass("error");
                        }
                        else {
                            var form2 = $("#form2");
                            $('.field').each(function () {
                                if($(this).hasClass("password") || $(this).hasClass("repassword")) {
                                    $(this).addClass("error");
                                    $(this).addClass("shake");
    
                                }
                            });
    
                            var pass = form2.children(".password");
                            var repass = form2.children(".repassword");
    
                            pass.children(".error-text").html("Password does not match");
                            repass.children(".error-text").html("Password does not match");     
                        }
    
                    }
            });
        }
        e.preventDefault();



    });    
        
        
    </script>
    
    <script src="./JS/script.js"></script>
    <script src="./JS/exhibition.js"></script>
    <script src="./JS/animation.js"></script>
    <script src="./JS/popUpModal.js"></script>
    <script src="./dist/JS/animsition.min.js"></script>


</body>
</html> 