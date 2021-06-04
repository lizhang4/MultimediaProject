/// <reference path="./typings/globals/jquery/index.d.ts" />


var home = $("#Home");
var category1 = $("#Category1");
var aboutUs = $("#About-Us");
var category2 = $("#Category2");

var homeBtn = $("#Home-Btn");
var categoryBtn = $("#Category-Btn");
var aboutUsBtn = $("#AboutUs-Btn");
var categoryDown = $("#Category-Down");
var categoryUp = $("#Category-Up");


var selectLink = 0;

function RemoveActive() {
    category1.removeClass("active");
    aboutUs.removeClass("active");
    home.removeClass("active");
    categoryBtn.removeClass("active");
    aboutUsBtn.removeClass("active");
    homeBtn.removeClass("active");
    category2.removeClass("active");
}

function AddActive(index) {
    RemoveActive();
    if(index == 0) {
        home.addClass("active");
        homeBtn.addClass("active");
    }
    else if(index == 1) {
        category1.addClass("active");
        categoryBtn.addClass("active");

    }
    else if(index == 2) {
        aboutUs.addClass("active");
        aboutUsBtn.addClass("active");

    }
    else if(index == 3) {
        category2.addClass("active");
        categoryBtn.addClass("active");
    }
}


