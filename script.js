/// <reference path="./typings/globals/jquery/index.d.ts" />


var home = $("#Home");
var category = $("#Category");
var aboutUs = $("#About-Us");

var homeBtn = $("#Home-Btn");
var categoryBtn = $("#Category-Btn");
var aboutUsBtn = $("#AboutUs-Btn");
var categoryDown = $("#Category-Down");
var categoryUp = $("#Category-Up");





function RemoveActive() {
    $("#Category .box:nth-child(1)").removeClass("active");
    $("#Category .box:nth-child(2)").removeClass("active");

    aboutUs.removeClass("active");
    home.removeClass("active");
    category.removeClass("active");
    categoryBtn.removeClass("active");
    aboutUsBtn.removeClass("active");
    homeBtn.removeClass("active");
}

function ChangePage(pageType){
    for (let i = 0; i < $(`.${pageType}`).length; i++) {
        $(`.${pageType}`).eq(i).removeClass("active");
    }
    console.log(pageCounter);
    $(`.${pageType}`).eq(pageCounter).addClass("active");
    // $(`.${pageType}`).eq(pageCounter).addClass("active");

}

function PageUp(pageType) {
    if (pageType == 'Category') {
        pageCounter--;
    }

    if (pageType == 'Sword') {
        pageCounter--;
    }
    ChangePage(pageType);
}

function PageDown(pageType) {
    if (pageType == 'Category') {
        pageCounter++;
    }

    if (pageType == 'Sword') {
        pageCounter++;
    }
    ChangePage(pageType);
}


var currentPageType;
var pageCounter = 0;

// homeBtn.click(function() {
//     pageCounter = 0;
//     RemoveActive();
//     $("#Home").addClass("active");
//     homeBtn.addClass("active");
//     currentPageType = 'Home';
//     console.log(currentPageType);
// });

// categoryBtn.click(function() {
//     pageCounter = 0;
//     RemoveActive();
//     $("#Category").eq(pageCounter).addClass("active");
//     categoryBtn.addClass("active");
//     currentPageType = 'Category';

// });

// aboutUsBtn.click(function() {
//     pageCounter = 0;
//     RemoveActive();
//     $("#About-Us").addClass("active");
//     currentPageType = 'AboutUs';
//     aboutUsBtn.addClass("active");
// });



