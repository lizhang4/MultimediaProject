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

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

        <div id = "loginModal" class = "modal fade" role = "dialog">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = 'button' class = 'close' data-dismiss = 'modal'>&times;</button>
                        <h4 class = 'modal-title'>login</h4>
                    </div>
                    <div class = "modal-body">
                        <form id = "login_form" action = "action.php" method = "POST">
                            <input id = "username" type = "text" name = "username" placeholder = "username"><br><br>
                            <input id = "password" type = "password" name = "password" placeholder = "password"><br><br>

                            <input id = "login_button" type = "submit" value = "login" class = "btn btn-warning"><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id = "registerModal" class = "modal fade" role = "dialog">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = 'button' class = 'close' data-dismiss = 'modal'>&times;</button>
                        <h4 class = 'modal-title'>register</h4>
                    </div>
                    <div class = "modal-body">
                        <form id = "register_form" action = "action.php" method = "POST">
                            <input id = "register_username" type = "text" name = "reg_username" placeholder = "username"><br><br>
                            <input id = "register_password" type = "password" name = "password" placeholder = "password"><br><br>
                            <input id = "repassword" type = "password" name = "repassword" placeholder = "re-enter password"><br><br>
                            <input id = "email" type = "email" name = "email" placeholder = "email"><br><br>

                            <input id = "register_button" type = "submit" value = "register" class = "btn btn-warning"><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $('#login_form').submit(function(e){
                    $.ajax({
                        type: "POST",
                        url: "action.php",
                        data: $("#login_form").serialize(),
                        success:function(data)
                        {
                            if(data == '1')
                            {
                                $('#login_form').hide();
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
                            else if(data == '4')
                            {
                                alert('password is blank');
                            }
                            else if(data == '5')
                            {
                                alert('username is blank');
                            }
                            else if(data == '6')
                            {
                                alert('both field are required');
                            }
                            else
                            {
                                alert('error');
                            }
                        }
                    });
                    e.preventDefault();
                });

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

                $('#register_form').submit(function(e){
                    $.ajax({
                        type: "POST",
                        url: "action.php",
                        data: $("#register_form").serialize(),
                        success:function(data)
                        {
                            if(data == '1')
                            {
                                $('#register_form').hide();
                                location.reload();
                            }
                            else if(data == '2')
                            {
                                alert('registered username');
                            }
                            else if(data == '3')
                            {
                                alert("password not match");
                            }
                            else
                            {
                                alert('field are required');
                            }
                        }
                    });
                    e.preventDefault();
                });
            });
        </script>
    </body>
</html>