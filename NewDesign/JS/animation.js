// This file control most of the animations of our webpage

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



    const selected = $(".selected");
    const optionsContainer = $(".options-container");
    const optionsList = $(".option");


    selected.click(function() {
        optionsContainer.toggleClass("active");

    });

    
    optionsList.click(function() {
        var tempData = $(this).children("label").html()+'<i class="fas fa-angle-down m-0 px-2 py-2"></i>';
        selected.html(tempData);
        optionsContainer.removeClass("active");
    }) 

});