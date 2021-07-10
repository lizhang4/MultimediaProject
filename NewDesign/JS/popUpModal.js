// This file manage the interaction of our pop-up modal

/// <reference path="../../typings/globals/jquery/index.d.ts" />


$(Document).ready(function() {
    $(".fa-caret-up").hide();
        
        $(".information").scroll(function () { 
            var y = $(this).scrollTop();
            var z = $(this)[0].scrollHeight;
            var sum = y + $(this).innerHeight();

        
        
        if(y == 0) {
            $(".fa-caret-up").hide();
        }
        else {
            $(".fa-caret-up").show();

        }

        if(sum > z-1) {
            $(".fa-caret-down").hide();
        }
        else {
            $(".fa-caret-down").show();
        }

    });


});
