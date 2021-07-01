<?php
    session_start();
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel = "stylesheet" href = "style1.css?v=<?php echo time();?>">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2cb5c720d7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class = "container" style = "width: 780px;">
            <h3 align = "center">hi</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php
            if(isset($_SESSION['username']))
            {
            ?>
            <div align = 'center'>
                <h1>Welcome <?php echo $_SESSION['username'];?></h1><br>
                <a href = "#" id = "logout">LOGOUT</a>
            </div>
            <?php
            }
            else
            {
            ?>
            <div align = "center">
                <button type = "button" name = "login" id = "login" class = "btn btn-success" data-toggle = "modal" data-target = "#loginModal">LOGIN</button>
                <button type = "button" name = "register" id = "register" class = "btn btn-success" data-toggle = "modal" data-target = "#registerModal">REGISTER</button>
            </div>
            <?php
            }
            ?>
        </div>

        <!--login form-->
        <div id = "loginModal" class = "modal fade" role = "dialog">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = 'button' class = 'close' data-dismiss = 'modal'>&times;</button>
                        <header>login</header>
                    </div>
                    <div class = "login-modal-body">
                        <form id = "login_form" action = "action.php" method = "POST">
                            <div class = "field username">
                                <div class = "input">
                                    <input id = "username" type = "text" name = "username" placeholder = "username">
                                    <i class = "icon fas fa-user-alt"></i>
                                    <i id = "error-username-icon" class = "error error-icon fas fa-exclamation-circle"></i>
                                </div>
                                <div class = "error error-text blank-text-username">Username can't be blank</div>
                            </div>
                            
                            <div class="field password">
                                <div class = "input">
                                    <input id = "password" type = "password" name = "password" placeholder = "password">
                                    <i class = "icon fas fa-lock"></i>
                                    <i id = "error-password-icon" class = "error error-icon fas fa-exclamation-circle"></i>
                                </div>
                                <div class = "error error-text blank-text-password">Password can't be blank</div>
                                <div class = "error error-text error-text-password">Password incorrect</div>
                            </div>
                            
                            <input id = "login_button" type = "submit" value = "login">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end login form-->

        <!-- register form -->
        <div id = "registerModal" class = "modal fade" role = "dialog">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = 'button' class = 'close' data-dismiss = 'modal'>&times;</button>
                        <header>register</header>
                    </div>
                    <div class = "register-modal-body">
                        <form id = "register_form" action = "action.php" method = "POST">
                            <div class = "field username">
                                <div class = "input">
                                    <input id = "reg_username" type = "text" name = "reg_username" placeholder = "username">
                                    <i class = "icon fas fa-user-alt"></i>
                                    <i id = "error-regusername-icon" class = "error error-icon fas fa-exclamation-circle"></i>
                                </div>
                                <div class="error error-text blank-text-username">Username can't be blank</div>
                                <div class="error error-text error-text-username">Registered username</div>
                            </div>
                            
                            <div class = "field password">
                                <div class = "input">
                                    <input id = "reg_password" type = "password" name = "password" placeholder = "password">
                                    <i class = "icon fas fa-lock"></i>
                                    <i id = "error-regpassword-icon" class = "error error-icon fas fa-exclamation-circle"></i>
                                </div>
                                <div class="error error-text blank-text-password">Password can't be blank</div>
                                <div class="error error-text error-text-password">Password not match</div>
                            </div>

                            <div class = "field repassword">
                                <div class = "input">
                                    <input id = "repassword" type = "password" name = "repassword" placeholder = "repassword">
                                    <i class = "icon fas fa-lock"></i>
                                    <i id = "error-repassword-icon" class = "error error-icon fas fa-exclamation-circle"></i>
                                </div>
                                <div class="error error-text blank-text-repassword">Password can't be blank</div>
                                <div class="error error-text error-text-repassword">Password not match</div>
                            </div>

                            <div class = "field email">
                                <div class = "input">
                                    <input id = "email" type = "text" name = "email" placeholder = "email">
                                    <i class = "icon fas fa-envelope"></i>
                                    <i id = "error-email-icon" class = "error error-icon fas fa-exclamation-circle"></i>
                                </div>
                                <div class="error error-text blank-text-email">Email can't be blank</div>
                                <div class="error error-text error-text-email">Invalid email</div>
                            </div>

                            <input id = "register_button" type = "submit" value = "register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end register form-->

        <!--ajax script-->
        <script>
            $(document).ready(function(){
                //login form
                $('#login_form').submit(function(e){
                    $('#error-username-icon').hide();
                    $('#error-password-icon').hide();
                    $('.blank-text-username').hide();
                    $('.blank-text-password').hide();
                    $('.error-text-password').hide();
                    $('#username').css('border-color','');
                    $('#password').css('border-color','');
                    $.ajax({
                        type: "POST",
                        url: "action.php",
                        data: $("#login_form").serialize(),
                        beforeSend:function()
                        {
                            $('#login_button').val('connecting...');
                        },
                        success:function(data)
                        {
                            if(data == '1')
                            {
                                $('#login_form').hide().fadeIn(1500);
                                location.reload();
                            }
                            else if(data == '2')
                            {
                                // alert('wrong password');
                                $("#loginModal").effect("shake", 500);
                                $('#login_button').val('login');
                                $('#error-password-icon').show();
                                $('.error-text-password').show();
                                $('#password').css('border-color','red');
                            }
                            else if(data == '3')
                            {
                                alert('no such data please register');
                                location.reload();
                            }
                            else if(data == '4')
                            {
                                // alert('password is blank');
                                $("#loginModal").effect("shake", 500);
                                $('#login_button').val('login');
                                $('#error-password-icon').show();
                                $('.blank-text-password').show();
                                $('#password').css('border-color','red');
                            }
                            else if(data == '5')
                            {
                                // alert('username is blank');
                                $("#loginModal").effect("shake", 500);
                                $('#login_button').val('login');
                                $('#error-username-icon').show();
                                $('.blank-text-username').show();
                                $('#username').css('border-color','red');
                            }
                            else if(data == '6')
                            {
                                // alert('both field are required');
                                $("#loginModal").effect("shake", 500);
                                $('#login_button').val('login');
                                $('#error-username-icon').show();
                                $('#error-password-icon').show();
                                $('.blank-text-username').show();
                                $('.blank-text-password').show();
                                $('#username').css('border-color','red');
                                $('#password').css('border-color','red');
                            }
                            else
                            {
                                alert('error');
                            }
                        }
                    });
                    e.preventDefault();
                });

                //register form
                $('#register_form').submit(function(e){
                    $('#error-regusername-icon').hide();
                    $('#error-regpassword-icon').hide();
                    $('#error-repassword-icon').hide();
                    $('#error-email-icon').hide();
                    $('.blank-text-username').hide();
                    $('.error-text-username').hide();
                    $('.blank-text-password').hide();
                    $('.error-text-password').hide();
                    $('.blank-text-repassword').hide();
                    $('.error-text-repassword').hide();
                    $('.blank-text-email').hide();
                    $('.error-text-email').hide();
                    $('#reg_username').css('border-color','');
                    $('#reg_password').css('border-color','');
                    $('#repassword').css('border-color','');
                    $('#email').css('border-color','');
                    $.ajax({
                        type: "POST",
                        url: "action.php",
                        data: $("#register_form").serialize(),
                        success:function(data)
                        {
                            if(data == '1')
                            {
                                $('#register_form').hide().fadeIn(1500);
                                location.reload();
                            }
                            else if(data == '2')
                            {
                                // alert('registered username');
                                $('#registerModal').effect('shake',500)
                                $('#error-regusername-icon').show();
                                $('.error-text-username').show();
                                $('#username').css('border-color','red');
                            }
                            else if(data == '3')
                            {
                                // alert("invalid email");
                                $('#registerModal').effect('shake',500);
                                $('#error-email-icon').show();
                                $('.error-text-email').show();
                                $('#email').css('border-color','red');
                            }
                            else if(data == '4')
                            {
                                // alert('incorrect password');
                                $('#registerModal').effect('shake',500);
                                $('#error-regpassword-icon').show();
                                $('#error-repassword-icon').show();
                                $('.error-text-password').show();
                                $('.error-text-repassword').show();
                                $('#reg_password').css('border-color','red');
                                $('#repassword').css('border-color','red');
                            }
                            else
                            {
                                // alert('field is required');
                                $("#registerModal").effect("shake", 500);
                                $('#error-regusername-icon').show();
                                $('#error-regpassword-icon').show();
                                $('#error-repassword-icon').show();
                                $('#error-email-icon').show();
                                $('.blank-text-username').show();
                                $('.blank-text-password').show();
                                $('.blank-text-repassword').show();
                                $('.blank-text-email').show();
                                $('#reg_username').css('border-color','red');
                                $('#reg_password').css('border-color','red');
                                $('#repassword').css('border-color','red');
                                $('#email').css('border-color','red');
                            }
                        }
                    });
                    e.preventDefault();
                });

                //logout
                $('#logout').click(function(){
                    var action = 'logout';
                    $.ajax({
                        url: "action.php",
                        method: "POST",
                        data: {action:action},
                        success:function()
                        {
                            location.reload();
                        }
                    });
                });
            });
        </script>
        <!--end ajax script-->
    </body>
</html>