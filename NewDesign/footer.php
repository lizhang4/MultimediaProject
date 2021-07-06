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
            <a href="about.php" class="about-us">About Us</a>
            <a href="about.php" class="faq">FAQ</a>
            <a href="about.php" class="contact-us">Contact Us</a>
        </div>

        </div>
    </div>
</footer>


<script src="./JS/logSign.js"></script>
    
    <script>
         $('#form1').submit(function(e){
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
                        alert('wrong password');
                    }
                    else if(data == '3')
                    {
                        alert('no such data please register');
                        location.reload();
                    }
                    // else if(data == '4')
                    // {
                    //     alert('password is blank');
                    // }
                    // else if(data == '5')
                    // {
                    //     alert('username is blank');
                    // }
                    // else if(data == '6')
                    // {
                    //     alert('both field are required');
                    // }
                    // else
                    // {
                    //     alert('error');
                    // }
                }
            });
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
        });
        
        $('#form2').submit( function(e) { 
            
            $.ajax({
                type: "POST",
                url: "action.php",
                data: $("#form2").serialize(),
                success:function(data)
                {
                    console.log(data);
                    if(data == '1')
                    {
                        $('#form2').hide();
                        location.reload();
                    }
                    else if(data == '2')
                    {
                        // alert('registered username');
                    var form2 = $("#form2");
                    $('.field').each(function () {
                        if($(this).hasClass("username")) {
                            $(this).addClass("error");
                        }
                    });
                        
                    $(".error-text-username").html("Username existed!");
                    $(".error-text-username").addClass("error");
                    form2.children(".username").addClass("shake", "error");
                }

            }
        });
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