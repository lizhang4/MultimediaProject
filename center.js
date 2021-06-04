/// <reference path="./typings/globals/jquery/index.d.ts" />

var centerPage = $("#center-page-template").html();
console.log(centerPage);

var templatePage = Handlebars.compile(centerPage);



var pages = [
    {
        title: "Luxury",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
        imageUrl: "./imgs/Carousels/Dao2.png",
    },
    {
        title: "Category",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
        imageUrl: "",
    },
    {
        title: "About Us",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
        imageUrl: "./imgs/Carousels/Dao2.png",
    },
]

var currentPage = 0;

var titleSample = `{{pages.[${currentPage}].title}}`;
var imageSample = `{{pages.[${currentPage}].imageUrl}}`;
var descriptionSample = `{{pages.[${currentPage}].description}}`;

$("#center-title").html(titleSample);
$("#center-description").html(imageSample);
$("#center_image").html(descriptionSample);




var centerPageData = templatePage ({
    pages
});

$("#center").html(centerPageData);