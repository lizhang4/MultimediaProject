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
</body>
</html> 