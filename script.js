/// <reference path="./typings/globals/jquery/index.d.ts" />


var home = $("#Home");
var category = $("#Category");
var aboutUs = $("#About-Us");

var homeBtn = $("#Home-Btn");
var categoryBtn = $("#Category-Btn");
var aboutUsBtn = $("#AboutUs-Btn");

var selectLink = 0;

function RemoveActive() {
    category.removeClass("active");
    aboutUs.removeClass("active");
    home.removeClass("active");
    categoryBtn.removeClass("active");
    aboutUsBtn.removeClass("active");
    homeBtn.removeClass("active");
}

function AddActive(index) {
    RemoveActive();
    if(index == 0) {
        home.addClass("active");
        homeBtn.addClass("active");
    }
    else if(index == 1) {
        category.addClass("active");
        categoryBtn.addClass("active");

    }
    else if(index == 2) {
        aboutUs.addClass("active");
        aboutUsBtn.addClass("active");

    }
}


