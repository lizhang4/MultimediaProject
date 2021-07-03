/// <reference path="../../typings/globals/jquery/index.d.ts" />

$(Document).ready(function() {
    $(window).scroll(function() {
        $(".slideup").each(function() {
            var x = $(this).offset().top;

            var y = $(window).scrollTop();

            if(x < y + 550) {
                $(this).addClass("slide");
            }
        });
    });

    $(window).scroll(function() {
        var x = $(".nav").offset().top;
        // console.log(x);

        var y = $(window).scrollTop();


        if (x < 50) {
            $(".nav").addClass("navExpand");
            $(".nav").removeClass("navShrink");
        }
        else {
            $(".nav").removeClass("navExpand");
            $(".nav").addClass("navShrink");


        }
    })
});